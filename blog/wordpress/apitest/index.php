<?php
$header = <<<EOH
/*****************************************************************************
 * Hacman Active Member RFIDs
 *    Requirements: PHP 5.3+, PHP XMLRPC and CURL Extensions
 *
 * Options Available:
 * ---------------------
 * -h, --help       shows this message
 * -u, --username   the username for the RPC call
 * -p, --password   the password for the RPC call
 * -b, --blogid     the blogid for RPC call, defaults to 1 if not set
 * --filename       set the filename to be exported, defaults to stdOut
 * 
 *****************************************************************************/
EOH;
$required_extensions = array(
    'xmlrpc'    => "Script requires XMLRPC php Extension installed and enabled",
    'curl'      => "Script requires CURL php Extension installed and enabled"
);

foreach ($required_extensions as $extension => $message) {
    if (!extension_loaded($extension)) {
        die($message."\n");
    }
}

$options = getopt('u:p:b::h::', array('username', 'password', 'blogid', 'filename', 'help'));

if (isset($options['h']) || isset($options['help'])) {
    die(trim(str_replace('*', '', $header), '\\/'));
}

$maps = array(
    'u' => 'username',
    'p' => 'password',
    'b' => 'blogid'
);

foreach($maps as $from => $to) {
    if (isset($options[$from])) {
        $options[$to] = $options[$from];
    }
}

if (!isset($options['password']) || !isset($options['username'])) {
    die('Username and Password required for operation');
}

if (!isset($options['blogid'])) {
    $options['blogid'] = 1;
}

class XMLRPC_Client
{

    private $url;

    function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Call the XML-RPC method named $method and return the results, or die trying!
     *
     * @param string $method XML-RPC method name
     * @param mixed ... optional variable list of parameters to pass to XML-RPC call
     *
     * @return array result of XML-RPC call
     */
    public function call()
    {

        // get arguments
        $params = func_get_args();
        $method = array_shift($params);

        $post = xmlrpc_encode_request($method, $params);

        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // issue the request
        $response = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errorno = curl_errno($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        // check for curl errors
        if ($curl_errorno != 0) {
            die("Curl ERROR: {$curl_errorno} - {$curl_error}n");
        }

        // check for server errors
        if ($response_code != 200) {
            die("ERROR: non-200 response from server: {$response_code} - {$response}n");
        }

        return xmlrpc_decode($response);
    }

}

$client = new XMLRPC_Client("http://hacman.org.uk/xmlrpc.php");

$users = $client->call(
    'wp.getUsers',
    $options['blogid'],
    $options['username'],
    $options['password'],
    array(
        'role' => 'active_member'
    ),
    array(
        'rfid_code',
        'nickname'
    )
);

if (isset($users['faultCode'])) {
    die($users['faultString']);
}

$target = 'php://output';
if (isset($options['filename'])) {
    $target = $options['filename'];
}

$fp = fopen($target, 'w');
foreach ($users as $user) {
    if (!isset($user['rfid_code'])) {
        continue;
    }
    fputcsv($fp, array($user['nickname'], $user['rfid_code']));
}
fclose($fp);

<?php /* Smarty version 2.6.26, created on 2012-09-16 12:07:28
         compiled from CRM/Admin/Form/Setting/Url.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Admin/Form/Setting/Url.tpl', 28, false),array('modifier', 'crmReplace', 'CRM/Admin/Form/Setting/Url.tpl', 37, false),array('function', 'help', 'CRM/Admin/Form/Setting/Url.tpl', 37, false),)), $this); ?>
<div class="crm-block crm-form-block crm-url-form-block">
<div id="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These settings define the URLs used to access CiviCRM resources (CSS files, Javascript files, images, etc.). Default values will be inserted the first time you access CiviCRM - based on the CIVICRM_UF_BASEURL specified in your installation's settings file (civicrm.settings.php).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<table class="form-layout">
    <tr class="crm-url-form-block-userFrameworkResourceURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['userFrameworkResourceURL']['label']; ?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['userFrameworkResourceURL']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge40') : smarty_modifier_crmReplace($_tmp, 'class', 'huge40')); ?>
 <?php echo smarty_function_help(array('id' => 'id-resource_url'), $this);?>

        </td>
    </tr>
    <tr class="crm-url-form-block-imageUploadURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['imageUploadURL']['label']; ?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['imageUploadURL']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge40') : smarty_modifier_crmReplace($_tmp, 'class', 'huge40')); ?>
 <?php echo smarty_function_help(array('id' => 'id-image_url'), $this);?>

        </td>
    </tr>
    <tr class="crm-url-form-block-customCSSURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['customCSSURL']['label']; ?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['customCSSURL']['html'])) ? $this->_run_mod_handler('crmReplace', true, $_tmp, 'class', 'huge40') : smarty_modifier_crmReplace($_tmp, 'class', 'huge40')); ?>
 <?php echo smarty_function_help(array('id' => 'id-css_url'), $this);?>

        </td>
    </tr>
    <tr class="crm-url-form-block-enableSSL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['enableSSL']['label']; ?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['enableSSL']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'id-enable_ssl'), $this);?>

        </td>
    </tr>
</table>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
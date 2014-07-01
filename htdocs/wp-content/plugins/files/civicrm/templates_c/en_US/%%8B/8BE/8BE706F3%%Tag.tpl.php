<?php /* Smarty version 2.6.26, created on 2012-09-16 12:15:55
         compiled from CRM/Admin/Page/Tag.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'docURL', 'CRM/Admin/Page/Tag.tpl', 27, false),array('function', 'crmURL', 'CRM/Admin/Page/Tag.tpl', 41, false),array('function', 'cycle', 'CRM/Admin/Page/Tag.tpl', 67, false),array('function', 'crmKey', 'CRM/Admin/Page/Tag.tpl', 171, false),array('block', 'ts', 'CRM/Admin/Page/Tag.tpl', 34, false),array('modifier', 'replace', 'CRM/Admin/Page/Tag.tpl', 75, false),)), $this); ?>

<?php ob_start(); ?><?php echo smarty_function_docURL(array('page' => 'Tags Admin'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('docLink', ob_get_contents());ob_end_clean(); ?>

<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 8): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Admin/Form/Tag.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
<?php else: ?>
<div class="crm-content-block">
    <div id="help">
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['docLink'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags can be assigned to any contact record, and are a convenient way to find contacts. You can create as many tags as needed to organize and segment your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['docLink']; ?>

    </div>

    <?php if ($this->_tpl_vars['rows']): ?>
        <?php if (! ( $this->_tpl_vars['action'] == 1 && $this->_tpl_vars['action'] == 2 )): ?>
            <div class="crm-submit-buttons">
        	    <div class="action-link">
                    <a href="<?php echo CRM_Utils_System::crmURL(array('q' => "action=add&reset=1"), $this);?>
" id="newTag" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Tag<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
                    <?php if ($this->_tpl_vars['adminTagSet']): ?>
                        <a href="<?php echo CRM_Utils_System::crmURL(array('q' => "action=add&reset=1&tagset=1"), $this);?>
" id="newTagSet" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Tag Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="merge_tag_status"></div>
        <div id="cat">
            <?php echo '<table id="options" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Tag'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'ID'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th id="nosort">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Description'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Parent ID'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Used For'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Tag set?'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Reserved?'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['row']):
?><?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['row']['class']; ?><?php echo ' crm-tag" id="tag_row_'; ?><?php echo $this->_tpl_vars['row']['id']; ?><?php echo '"><td class="crm-tag-name">'; ?><?php echo $this->_tpl_vars['row']['name']; ?><?php echo '</td><td class="crm-tag-id">'; ?><?php echo $this->_tpl_vars['row']['id']; ?><?php echo '</td><td class="crm-tag-description">'; ?><?php echo $this->_tpl_vars['row']['description']; ?><?php echo ' </td><td class="crm-tag-parent">'; ?><?php echo $this->_tpl_vars['row']['parent']; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['row']['parent_id']): ?><?php echo '('; ?><?php echo $this->_tpl_vars['row']['parent_id']; ?><?php echo ')'; ?><?php endif; ?><?php echo '</td><td class="crm-tag-used_for">'; ?><?php echo $this->_tpl_vars['row']['used_for']; ?><?php echo '</td><td class="crm-tag-is_tagset">'; ?><?php if ($this->_tpl_vars['row']['is_tagset']): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['config']->resourceBase; ?><?php echo 'i/check.gif" alt="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Tag Set'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" />'; ?><?php endif; ?><?php echo '</td><td class="crm-tag-is_reserved">'; ?><?php if ($this->_tpl_vars['row']['is_reserved']): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['config']->resourceBase; ?><?php echo 'i/check.gif" alt="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Reserved'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" />'; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['row']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['row']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        </div>
        <?php if (! ( $this->_tpl_vars['action'] == 1 && $this->_tpl_vars['action'] == 2 )): ?>
            <div class="crm-submit-buttons">
                <div class="action-link">
                    <a href="<?php echo CRM_Utils_System::crmURL(array('q' => "action=add&reset=1"), $this);?>
" id="newTag" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Tag<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
                    <?php if ($this->_tpl_vars['adminTagSet']): ?>
                        <a href="<?php echo CRM_Utils_System::crmURL(array('q' => "action=add&reset=1&tagset=1"), $this);?>
" id="newTagSet" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Tag Set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="messages status">
        <div class="icon inform-icon"></div>&nbsp;
            <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/tag','q' => "action=add&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('crmURL', ob_get_contents());ob_end_clean(); ?>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['crmURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no Tags present. You can <a href='%1'>add one</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>    
    <?php endif; ?>

<div id="mergeTagDialog">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Begin typing name of tag to merge into.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/>
    <input type="text" id="tag_name"/>
    <input type="hidden" id="tag_name_id" value="">
    <div id="used_for_warning" class="status message"></div>
</div>

</div>

<?php echo '
<script type="text/javascript">
cj("#mergeTagDialog").hide( );
cj( function() {
    cj(\'.merge_tag\').click(function(){
        var row_id = cj(this).closest(\'tr\').attr(\'id\');
        var tagId = row_id.split(\'_\');
        mergeTag( tagId[2] );
    });    
});

function mergeTag( fromId ) {
    var fromTag = cj(\'#tag_row_\' + fromId).children(\'td.crm-tag-name\').text();
    cj(\'#used_for_warning\').html(\'\');

    cj("#mergeTagDialog").show( );
	cj("#mergeTagDialog").dialog({
		title: "Merge tag \'" + fromTag + "\' into:",
		modal: true,
		bgiframe: true, 
		close: function(event, ui) { cj("#tag_name").unautocomplete( ); },
		overlay: { 
			opacity: 0.5, 
			background: "black" 
		},

		open:function() {
			cj("#tag_name").val( "" );
			cj("#tag_name_id").val( null );

			var tagUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/mergeTagList','h' => 0,'q' => 'fromId='), $this);?>
"<?php echo ' + fromId;

			cj("#tag_name").autocomplete( tagUrl, {
				width: 260,
				selectFirst: false,
				matchContains: true 
			});
			
			cj("#tag_name").focus();
			cj("#tag_name").result(function(event, data, formatted) {
				cj("input[id=tag_name_id]").val(data[1]);
                                if ( data[2] == 1 ) {
                                    cj(\'#used_for_warning\').html("Warning: \'" + fromTag + "\' has different used-for options than the selected tag, which would be merged into the selected tag. Click Ok to proceed.");
                                } else {
                                    cj(\'#used_for_warning\').html(\'\');
                                }
			});		    
		},

		buttons: { 
			"Ok": function() { 	    
				if ( ! cj("#tag_name").val( ) ) {
					alert(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select valid tag from the list<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\');
					return false;
				}
				var toId = cj("#tag_name_id").val( );
				if ( ! toId ) {
					alert(\''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select valid tag from the list<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\');
					return false;
				}
				
                /* send synchronous request so that disabling any actions for slow servers*/
				var postUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/mergeTags','h' => 0), $this);?>
"<?php echo '; 
				var data    = \'{fromId:\'+ fromId + \',toId:\'+ toId + ",key:'; ?>
<?php echo smarty_function_crmKey(array('name' => 'civicrm/ajax/mergeTags'), $this);?>
<?php echo '}";
                cj.ajax({ type     : "POST", 
					  url      : postUrl, 
					  data     : data, 
					  dataType : "json",
					  success  : function( values ) {
                        if ( values.status == true ) {
                            cj(\'#tag_row_\' + toId).children(\'td.crm-tag-used_for\').text(values.tagB_used_for);
                            var msg = "\'" + values.tagA + "\' has been merged with \'" + values.tagB + "\'. All records previously tagged with \'" + values.tagA + "\' are now tagged with \'" + values.tagB + "\'.";
                            cj(\'#tag_row_\' + fromId).html(\'<td colspan="8"><div class="status message"><div class="icon inform-icon"></div>\' + msg + \'</div></td>\'); 
                        }
                      }
                });
				
                cj(this).dialog("close"); 
				cj(this).dialog("destroy");
 			},

			"Cancel": function() { 
				cj(this).dialog("close"); 
				cj(this).dialog("destroy"); 
			} 
          }
	});
}
</script>
'; ?>


<?php endif; ?>
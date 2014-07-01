<?php /* Smarty version 2.6.26, created on 2012-09-16 12:13:16
         compiled from CRM/Admin/Form/Setting/Search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Admin/Form/Setting/Search.tpl', 32, false),)), $this); ?>
<div class="crm-block crm-form-block crm-search-setting-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
        <tr class="crm-search-setting-form-block-includeWildCardInName">
            <td class="label"><?php echo $this->_tpl_vars['form']['includeWildCardInName']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['includeWildCardInName']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If enabled, wildcards are automatically added to the beginning AND end of the search term when users search for contacts by Name. EXAMPLE: Searching for 'ada' will return any contact whose name includes those letters - e.g. 'Adams, Janet', 'Nadal, Jorge', etc. If disabled, a wildcard is added to the end of the search term only. EXAMPLE: Searching for 'ada' will return any contact whose last name begins with those letters - e.g. 'Adams, Janet' but NOT 'Nadal, Jorge'. Disabling this feature will speed up search significantly for larger databases, but users must manually enter wildcards ('%' or '_') to the beginning of the search term if they want to find all records which contain those letters. EXAMPLE: '%ada' will return 'Nadal, Jorge'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
        <tr class="crm-search-setting-form-block-includeEmailInName">
            <td class="label"><?php echo $this->_tpl_vars['form']['includeEmailInName']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['includeEmailInName']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If enabled, email addresses are automatically included when users search by Name. Disabling this feature will speed up search significantly for larger databases, but users will need to use the Email search fields (from Advanced Search, Search Builder, or Profiles) to find contacts by email address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr  class="crm-search-setting-form-block-includeNickNameInName">
            <td class="label"><?php echo $this->_tpl_vars['form']['includeNickNameInName']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['includeNickNameInName']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If enabled, nicknames are automatically included when users search by Name.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-includeAlphabeticalPager">
            <td class="label"><?php echo $this->_tpl_vars['form']['includeAlphabeticalPager']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['includeAlphabeticalPager']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If disabled, the alphabetical pager will not be displayed on the search screens. This will improve response time on search results on large datasets.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-includeOrderByClause">
            <td class="label"><?php echo $this->_tpl_vars['form']['includeOrderByClause']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['includeOrderByClause']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If disabled, the search results will not be ordered. This will improve response time on search results on large datasets significantly.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-defaultSearchProfileID">
            <td class="label"><?php echo $this->_tpl_vars['form']['defaultSearchProfileID']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['defaultSearchProfileID']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If set, this will be the default profile used for contact search. This is experimental functionality.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-smartGroupCacheTimeout">
            <td class="label"><?php echo $this->_tpl_vars['form']['smartGroupCacheTimeout']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['smartGroupCacheTimeout']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The number of minutes to cache smart group contacts. A value of '0' means the cache is emptied immediately when any contact is edited or a new one is added. If your contact data changes frequently, you may want to try setting this to a value of 5 minutes or so.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-autocompleteContactSearch">
            <td class="label"><?php echo $this->_tpl_vars['form']['autocompleteContactSearch']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['autocompleteContactSearch']['html']; ?>
<br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected fields will be displayed in back-office autocomplete dropdown search results (Quick Search, etc.). Contact Name is always included.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-search-setting-form-block-autocompleteContactReference">
            <td class="label"><?php echo $this->_tpl_vars['form']['autocompleteContactReference']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['autocompleteContactReference']['html']; ?>
<br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected fields will be displayed in autocomplete dropdown search results for 'Contact Reference' custom fields. Contact Name is always included. NOTE: You must assign 'access contact reference fields' permission to the anonymous role if you want to use custom contact reference fields in profiles on public pages. For most situations, you should use the 'Limit List to Group' setting when configuring a contact reference field which will be used in public forms to prevent exposing your entire contact list.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
       </table>
            <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
        
</div>
<?php
/* Smarty version 4.3.4, created on 2024-03-07 08:57:29
  from '/app/admin866eravwodumdnu3rvu/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e97369329425_05136588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109d7aa4a695b747f33f4a70651773a366d8a8e8' => 
    array (
      0 => '/app/admin866eravwodumdnu3rvu/themes/new-theme/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e97369329425_05136588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

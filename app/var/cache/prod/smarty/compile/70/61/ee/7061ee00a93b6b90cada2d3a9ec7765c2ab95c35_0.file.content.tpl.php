<?php
/* Smarty version 4.3.4, created on 2024-03-07 08:57:23
  from '/app/admin866eravwodumdnu3rvu/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e973631a0b24_86985267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7061ee00a93b6b90cada2d3a9ec7765c2ab95c35' => 
    array (
      0 => '/app/admin866eravwodumdnu3rvu/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e973631a0b24_86985267 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

<?php
/* Smarty version 3.1.46, created on 2022-08-30 12:29:13
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_630e3ad9e7d509_75185389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ddf687fe85d44122291be682291af389b18d2c9' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/sections/header.tpl',
      1 => 1557906298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630e3ad9e7d509_75185389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}

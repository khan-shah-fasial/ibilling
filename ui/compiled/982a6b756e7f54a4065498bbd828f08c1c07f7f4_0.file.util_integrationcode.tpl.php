<?php
/* Smarty version 3.1.46, created on 2024-01-12 01:11:22
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_65a0d80a7669a3_29894931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '982a6b756e7f54a4065498bbd828f08c1c07f7f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\util_integrationcode.tpl',
      1 => 1692377561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a0d80a7669a3_29894931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110425073365a0d80a7596d2_32244074', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_110425073365a0d80a7596d2_32244074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110425073365a0d80a7596d2_32244074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h5>

                </div>
                <div class="ibox-content">
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>

                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}

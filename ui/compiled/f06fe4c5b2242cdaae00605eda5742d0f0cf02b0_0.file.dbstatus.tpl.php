<?php
/* Smarty version 3.1.46, created on 2023-09-08 02:42:52
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\dbstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_64fac26c960db5_83412742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06fe4c5b2242cdaae00605eda5742d0f0cf02b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\dbstatus.tpl',
      1 => 1692377561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fac26c960db5_83412742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40575276464fac26c945665_41297737', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_40575276464fac26c945665_41297737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40575276464fac26c945665_41297737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Database Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </h5>
            <div class="ibox-tools">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Database Backup'];?>
</a>
            </div>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'tbl');
$_smarty_tpl->tpl_vars['tbl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}

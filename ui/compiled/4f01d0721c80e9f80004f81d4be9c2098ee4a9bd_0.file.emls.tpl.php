<?php
/* Smarty version 3.1.46, created on 2022-08-30 11:57:13
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/emls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_630e335952f820_37332654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f01d0721c80e9f80004f81d4be9c2098ee4a9bd' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/emls.tpl',
      1 => 1621338299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630e335952f820_37332654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1537345811630e3359522673_89651553', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1251457694630e335952ed25_65579301', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_1537345811630e3359522673_89651553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1537345811630e3359522673_89651553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <form role="form" name="eml" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/eml-post">


                        <div class="form-group">
                            <label for="email_method"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email Using'];?>
</label>
                            <select name="email_method" id="email_method" class="form-control">
                                <option value="phpmail" <?php if ($_smarty_tpl->tpl_vars['e']->value['method'] == 'phpmail') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['PHP mail Function'];?>
</option>
                                <option value="smtp" <?php if ($_smarty_tpl->tpl_vars['e']->value['method'] == 'smtp') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP'];?>
</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sysemail"><?php echo $_smarty_tpl->tpl_vars['_L']->value['System Email'];?>
</label>
                            <input type="text" class="form-control" id="sysemail" name="sysemail" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['sysEmail'];?>
">
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Outgoing Email Will'];?>
</span>
                        </div>

                        <div id="a_hide">
                            <div class="form-group">
                                <label for="smtp_host"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Host'];?>
</label>
                                <input type="text" class="form-control" id="smtp_host" name="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['host'];?>
">

                            </div>

                            <div class="form-group">
                                <label for="smtp_user"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Username'];?>
</label>
                                <input type="text" class="form-control" id="smtp_user" name="smtp_user" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['username'];?>
">

                            </div>

                            <div class="form-group">
                                <label for="smtp_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Password'];?>
</label>
                                <input type="password" class="form-control" id="smtp_password" name="smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['password'];?>
">

                            </div>

                            <div class="form-group">
                                <label for="smtp_port"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Port'];?>
</label>
                                <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['port'];?>
">

                            </div>

                            <div class="form-group">
                                <label for="smtp_secure"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Secure'];?>
</label>
                                <select name="smtp_secure" id="smtp_secure" class="form-control">
                                    <option value="tls" <?php if ($_smarty_tpl->tpl_vars['e']->value['secure'] == 'tls') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['TLS'];?>
</option>
                                    <option value="ssl" <?php if ($_smarty_tpl->tpl_vars['e']->value['secure'] == 'ssl') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['SSL'];?>
</option>

                                </select>

                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>
        </div>






    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1251457694630e335952ed25_65579301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1251457694630e335952ed25_65579301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {


        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}

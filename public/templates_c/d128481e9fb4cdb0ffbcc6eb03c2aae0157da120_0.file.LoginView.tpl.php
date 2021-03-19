<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-19 19:48:13
  from 'D:\xampp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603007ede0baf0_73882453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd128481e9fb4cdb0ffbcc6eb03c2aae0157da120' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1613760481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603007ede0baf0_73882453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_618636856603007eddf7eb9_02640182', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'messages'} */
class Block_2077335087603007eddfe165_50056452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                        <div class="messages">
                            <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_618636856603007eddf7eb9_02640182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_618636856603007eddf7eb9_02640182',
  ),
  'messages' => 
  array (
    0 => 'Block_2077335087603007eddfe165_50056452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
start">Start</a></li>
            <li class="active">Logowanie</li>
        </ol>

        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Zaloguj się</h1>
                </header>            
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                                <div class="top-margin">
                                    <label for="id_login">Login</label>
                                    <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" class="form-control">
                                </div>

                                <div class="top-margin">
                                    <label for="id_password">Hasło</label>
                                    <input id="id_password" type="password" name="password" class="form-control">
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" value="zaloguj" class="btn btn-action">Zaloguj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2077335087603007eddfe165_50056452', 'messages', $this->tplIndex);
?>

                </div>
            </article>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}

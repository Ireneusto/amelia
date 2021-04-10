<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 10:41:47
  from 'D:\xampp\htdocs\amelia\app\views\CustomerEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6070134b3888d3_14431894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea6aa6b3d86a3c0e1e0ab267e6897264e60e7519' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\CustomerEditView.tpl',
      1 => 1617957700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6070134b3888d3_14431894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16655148166070134b3796a4_04948617', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'messages'} */
class Block_44985416070134b37e614_87688741 extends Smarty_Internal_Block
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
class Block_16655148166070134b3796a4_04948617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16655148166070134b3796a4_04948617',
  ),
  'messages' => 
  array (
    0 => 'Block_44985416070134b37e614_87688741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
start">Start</a></li>
            <li class="active">Panel pracownika</li>
        </ol><br/>
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
customerSave" method="post" class="pure-form pure-form-aligned">
                                <legend>Dane klienta</legend>
                                <div class="top-margin">
                                    <label for="name">Imię</label>
                                    <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
                                </div>
                                <div class="top-margin">
                                    <label for="surname">Nazwisko</label>
                                    <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
                                </div>
                                <div class="top-margin">
                                    <label for="phone_number">Nr telefonu</label>
                                    <input id="phone_number" type="text" placeholder="nr telefonu" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
">
                                </div>
                                <div class="top margin" style="display: flex">
                                    <a class="pure-button button-secondary" style="width: 35%" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
customerList">Powrót</a>
                                    &nbsp;
                                    <input type="submit" class="pure-button pure-button-primary"  style="width: 65%" value="Zapisz"/>
                                </div>
                                <input type="hidden" name="IDcustomer" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->IDcustomer;?>
">
                            </form>	
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44985416070134b37e614_87688741', 'messages', $this->tplIndex);
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

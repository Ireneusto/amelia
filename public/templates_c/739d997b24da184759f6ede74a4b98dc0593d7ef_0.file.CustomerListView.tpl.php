<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 10:55:05
  from 'D:\xampp\htdocs\amelia\app\views\CustomerListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607016690fa371_92221562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739d997b24da184759f6ede74a4b98dc0593d7ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\CustomerListView.tpl',
      1 => 1617958499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607016690fa371_92221562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1865963003607016690dab67_09983911', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'messages'} */
class Block_2136902148607016690e1847_55597130 extends Smarty_Internal_Block
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
class Block_1865963003607016690dab67_09983911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1865963003607016690dab67_09983911',
  ),
  'messages' => 
  array (
    0 => 'Block_2136902148607016690e1847_55597130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Klienci </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
customerList" class="form-inline">
                        <input type="text" placeholder="Nazwisko..." name="surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" class="form-control" style="width: 27em"/>
                        <button type="submit" class="btn btn-action"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                        
                <div class="6u">				 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList" class="button">Produkty</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
customerList" class="button">Klienci</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeList" class="button">Pracownicy</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderList" class="button">Zamówienia</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">WYLOGUJ</a>
                </div> 
                
                <div class="bottom-margin">
                    <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
customerNew">+ nowy klient</a>
                    <a class="pure-button button-error" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
customerList">lista</a>
                </div>	
                
                <div class="top-margin">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136902148607016690e1847_55597130', 'messages', $this->tplIndex);
?>

                </div>
                <div class="table-responsive">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Nr telefonu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["IDcustomer"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["phone_number"];?>
</td><td style='display:flex'><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
customerEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['IDcustomer'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
customerDelete/<?php echo $_smarty_tpl->tpl_vars['c']->value['IDcustomer'];?>
">Usuń</a></td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                </div>
                <div class="top-margin">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['IDproduct']->value;
$_prefixVariable1 = ob_get_clean();
if (!($_prefixVariable1 == '')) {?>
                        <a class="pure-button button-secondary" style="float:right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">wróć do listy produktów</a>
                    <?php }?>
                </div>
            </article>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}

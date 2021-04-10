<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-08 17:51:08
  from 'D:\xampp\htdocs\amelia\app\views\ProductListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606f266cc06160_28759197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464202e9efa1f03de5f4aef0951627928ab97f25' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\ProductListView.tpl',
      1 => 1617897054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606f266cc06160_28759197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1274167044606f266cbed1b1_98370351', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'messages'} */
class Block_971359828606f266cbf4562_21413106 extends Smarty_Internal_Block
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
class Block_1274167044606f266cbed1b1_98370351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1274167044606f266cbed1b1_98370351',
  ),
  'messages' => 
  array (
    0 => 'Block_971359828606f266cbf4562_21413106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li class="active">Panel administratora</li>
            <!--<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['this']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['this']->value->role;?>
</span>-->
        </ol>
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Produkty </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productList" class="form-inline">
                        <input type="text" placeholder="Nazwa produktu..." name="product_name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->product_name;?>
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
productNew">+ nowy produkt</a>
                    <a class="pure-button button-error" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">lista</a>
                    
                </div>	
                
                <div class="top-margin">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971359828606f266cbf4562_21413106', 'messages', $this->tplIndex);
?>

                </div>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa produktu</th>
                            <th>Kategoria</th>
                            <th>Cena</th>
                            <th>Ilość</th>
                            <th>Dostępny</th>
                            <th>Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["IDproduct"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["product_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["category"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["quantity"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["status"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['IDproduct'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['IDproduct'];?>
">Usuń</a><?php if ($_smarty_tpl->tpl_vars['p']->value["status"] == 'T') {?>&nbsp;<a class="button-small pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
customerList?IDproduct=<?php echo $_smarty_tpl->tpl_vars['p']->value['IDproduct'];?>
">Dodaj do zamówienia</a><?php }?></td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                </div>
            </article>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}

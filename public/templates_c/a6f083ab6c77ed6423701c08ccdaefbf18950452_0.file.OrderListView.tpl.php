<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-09 19:48:50
  from 'D:\xampp\htdocs\amelia\app\views\OrderListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60709382cc5ec4_33267459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f083ab6c77ed6423701c08ccdaefbf18950452' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\OrderListView.tpl',
      1 => 1617989842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60709382cc5ec4_33267459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89283262260709382cb6ee2_86232745', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'content'} */
class Block_89283262260709382cb6ee2_86232745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89283262260709382cb6ee2_86232745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
        <ol class="breadcrumb">
            <li class="active">Panel administratora</li>
        </ol>
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Zamówienia </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3> 
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderList" class="form-inline">
                        <input type="text" placeholder="Numer zamówienia..." name="order_number" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->IDproduct;?>
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
                
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID zamówienia</th>
                            <th>Data zamówienia</th>
                            <th>ID produktu</th>
                            <th>ID klienta</th>
                            <th>ID pracownika</th>
                            <th>Status</th>
                            <th>Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['o']->value["IDorder"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["order_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["IDproduct"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["IDcustomer"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["IDemployee"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["order_completed"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderEdit/<?php echo $_smarty_tpl->tpl_vars['o']->value['IDorder'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderDelete/<?php echo $_smarty_tpl->tpl_vars['o']->value['IDorder'];?>
">Usuń</a></td></tr>
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

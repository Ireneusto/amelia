<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-10 13:49:43
  from 'D:\xampp\htdocs\amelia\app\views\EmployeeListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607190d7b142e8_98094804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd310ef385dd8ed047ed3f97e26bc20b57c2681d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\EmployeeListView.tpl',
      1 => 1618055376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607190d7b142e8_98094804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_384444595607190d7af3157_06987575', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "nowy_widok1.tpl");
}
/* {block 'messages'} */
class Block_1717164743607190d7af8d91_88450675 extends Smarty_Internal_Block
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
class Block_384444595607190d7af3157_06987575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_384444595607190d7af3157_06987575',
  ),
  'messages' => 
  array (
    0 => 'Block_1717164743607190d7af8d91_88450675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header> 
    <div class="container">
              
       
        
        <div class="row">
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Pracownicy </h1>
                </header>
                
                <div class="bottom-margin">
                    <h3 class="page-title">Wyszukaj: </h3>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
employeeList" class="form-inline">
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
employeeNew">+ nowy pracownik</a>
                    <a class="pure-button button-error" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeList">lista</a>
                </div>	
                
                <div class="top-margin">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1717164743607190d7af8d91_88450675', 'messages', $this->tplIndex);
?>

                </div>
                <div class="table-responsive">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Login</th>
                            <th>Hasło</th>
                            <th>Imię</th>
                            <th>Nazwisko</th> 
                            <th>Nr telefonu</th>
                            <th>Data zatrudnienia</th>
                            <th>Rola w systemie</th>
                            
                           
                            <!--<th>Zamówienia</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['e']->value["IDemployee"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["password"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["phone_number"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["hire_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value["role"];?>
</td><td style='display:flex'><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
employeeEdit/<?php echo $_smarty_tpl->tpl_vars['e']->value['IDemployee'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
employeeDelete/<?php echo $_smarty_tpl->tpl_vars['e']->value['IDemployee'];?>
">Usuń</a></td><!--<td><?php if (!($_smarty_tpl->tpl_vars['c']->value["IDorder"] == '')) {?>Nr zamówienia: []<a class="button-small pure-button button-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderList?IDcustomer=<?php echo $_smarty_tpl->tpl_vars['c']->value["IDcustomer"];?>
">Szczegóły</a><?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['IDproduct']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['c']->value["IDorder"];
$_prefixVariable2 = ob_get_clean();
if ((!($_prefixVariable1 == '')) && ($_prefixVariable2 == '')) {?><a class="button-small pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderSave?IDcustomer=<?php echo $_smarty_tpl->tpl_vars['c']->value["IDcustomer"];?>
&IDproduct=<?php echo $_smarty_tpl->tpl_vars['IDproduct']->value;?>
">Wybierz</a><?php }}?></td>--></tr>
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

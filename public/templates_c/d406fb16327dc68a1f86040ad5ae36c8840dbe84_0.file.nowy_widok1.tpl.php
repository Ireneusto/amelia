<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-03 16:51:29
  from 'D:\xampp\htdocs\amelia\app\views\templates\nowy_widok1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603fb081889703_67382455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd406fb16327dc68a1f86040ad5ae36c8840dbe84' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\templates\\nowy_widok1.tpl',
      1 => 1614786678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fb081889703_67382455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sklep Jubiler</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><?php echo '<script'; ?>
 src="css/ie/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
		<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/skel.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/skel-layers.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/init.js"><?php echo '</script'; ?>
>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div class="wrapper style1">
			
			<!-- Header -->
				<div id="header">
					<div class="container">
							
						<!-- Logo -->
							<h1><a href="#" id="logo">Solarize</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="#">STRONA GŁÓWNA</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">ZALOGUJ SIĘ</a></li>
                                                                      
								</ul>
							</nav>
	
					</div>
				</div>
				
			<!-- Banner -->
				<div id="banner">
					<section class="container">
                                            <span></span>
                                            <span></span>
                                            <span></span>
					</section>
				</div>

			</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_959524528603fb08187c274_07751376', 'content');
?>

	<!-- Footer -->
		<div id="footer">
			<section class="container">
				<header class="major">
					<h2>Projekt zaliczeniowy</h2>
					<span class="byline">Aplikacje sieciowe: Ireneusz Stolarczyk</span>
				</header>
				
				<hr />
			</section>
			
			<!-- Copyright -->
				<div id="copyright">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>			
		</div>
                
	</body>
</html><?php }
/* {block 'content'} */
class Block_959524528603fb08187c274_07751376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_959524528603fb08187c274_07751376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
		<!-- Team -->
			<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
						<h2>Jubiler</h2>
						<span class="byline">Oferujemy szeroki wybór biżuterii</span>
					</header>
					<div class="row">
						<div class="3u">
							<a href="#" class="image"><img src="images/ring.png" alt=""></a>
							<h3>Pierścionki</h3>
							<p>Zaręczynowe i na prezent. Z żółtego, białego i różowego złota.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/earrings.png" alt=""></a>
							<h3>Kolczyki</h3>
							<p>Złote, srebrne i dwukolorowe, z drogimi kamieniami i bez.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/necklace.png" alt=""></a>
							<h3>Naszyjniki</h3>
							<p>Eleganckie. Wpasowujące się do najnowszych trendów.</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/bracelet.png" alt=""></a>
							<h3>Bransolety</h3>
							<p>Złote i srebrne w najmodniejszych wariantach.</p>
						</div>
					</div>
				</section>
			</div>
                <?php
}
}
/* {/block 'content'} */
}

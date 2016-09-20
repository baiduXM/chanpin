<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 13:27:20
         compiled from "D:\OtherWeb\fangfan\smartys\templates\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:30743556c5db7f31784-77049183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2777c6dd9a3a97ec68df4715b72ace174c71774' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\_footer.html',
      1 => 1425526459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30743556c5db7f31784-77049183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'title' => 0,
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556c5db802dc61_10930384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c5db802dc61_10930384')) {function content_556c5db802dc61_10930384($_smarty_tpl) {?><footer>
	<a class="up-btn" href="javascript:;">↑<em>返回顶部</em></a>
	<nav>
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h1>
		<ul class="clearfix">
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->index>2) {?>fr<?php } else { ?>fl<?php }
if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			</li>
			<?php } ?>
		</ul>
	</nav>
	<section class="copyright">
		<p><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</p>
	</section>
</footer>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>

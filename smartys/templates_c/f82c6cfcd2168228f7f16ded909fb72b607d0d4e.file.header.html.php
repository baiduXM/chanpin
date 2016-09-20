<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 09:11:43
         compiled from "D:\LuSHaobo\web\demo.smarty.com\smartys\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:7561551e594fe289a1-85513533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82c6cfcd2168228f7f16ded909fb72b607d0d4e' => 
    array (
      0 => 'D:\\LuSHaobo\\web\\demo.smarty.com\\smartys\\templates\\header.html',
      1 => 1425629289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7561551e594fe289a1-85513533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'logo' => 0,
    'header' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e594fef3bc7_26903951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e594fef3bc7_26903951')) {function content_551e594fef3bc7_26903951($_smarty_tpl) {?><header>
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	<div>LOGO引用方式1：<img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />调用数据库LOGO</div>
	<div>LOGO引用方式2：<img src="<?php echo $_smarty_tpl->tpl_vars['header']->value['logo']['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['header']->value['logo']['title'];?>
" />模板自定义LOGO</div>
	<nav>
		<ul class="clearfix">
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<li class="fl" style="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>background-color:#C7DBFF<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
					<ul class="clearfix">
						<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
						<li style="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>background-color:#B0CCFF<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
						<?php } ?>
					</ul>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
	</nav>
</header><?php }} ?>

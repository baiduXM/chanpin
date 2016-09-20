<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 09:32:39
         compiled from "D:\OtherWeb\fangfan\smartys\templates\GP0058\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:1529055d445581d9183-52335498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e26f29b36f55c3a67f6322cc8b42125e47eb18' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\GP0058\\_pagenavs_sub3.html',
      1 => 1440216366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529055d445581d9183-52335498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d445582aa576_16351471',
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    '_pagenavs_sub3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d445582aa576_16351471')) {function content_55d445582aa576_16351471($_smarty_tpl) {?><!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
	<h3><span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</span></h3>	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
	<ul class="first">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="sub">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>
	<h3><span><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
</span></h3>
	<ul class="first">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="sub">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</nav>
<?php }?><?php }} ?>

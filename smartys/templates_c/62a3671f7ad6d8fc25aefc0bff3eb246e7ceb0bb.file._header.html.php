<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-27 16:31:51
         compiled from "D:\swap.gbpen.com\smartys\templates\3\pc\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2032255fa11f9801347-73851477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a3671f7ad6d8fc25aefc0bff3eb246e7ceb0bb' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\3\\pc\\_header.html',
      1 => 1445934679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032255fa11f9801347-73851477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55fa11f98de400_26044930',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'limit' => 0,
    'nav' => 0,
    '_header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa11f98de400_26044930')) {function content_55fa11f98de400_26044930($_smarty_tpl) {?><div class="header">
	<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/></a></h1>
	<div class="nav">
		<ul>
		<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(6, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);
}?>
			<li style="width:<?php echo 100/$_smarty_tpl->tpl_vars['limit']->value-1;?>
%"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {
break 1;
}?>
		<?php } ?>
		</ul>
		<span><a href="javascript:void(0);" onclick="shoucang(document.title, window.location)" id="addfavorite">加入收藏</a></span>
		<span class="ang_l"></span>
		<span class="ang_r"></span>
		<span class="ang_wl"></span>
		<span class="ang_wr"></span>

	</div>
	<div class="clear"></div>
	<div class="img-wrap edge"><img src="<?php echo $_smarty_tpl->tpl_vars['_header']->value['lager_pic']['image'];?>
" height="305" width="1200" alt="<?php echo $_smarty_tpl->tpl_vars['_header']->value['lager_pic']['title'];?>
"/><div class="shadow"></div></div>
</div><?php }} ?>

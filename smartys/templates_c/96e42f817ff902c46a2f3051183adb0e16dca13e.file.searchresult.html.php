<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-17 11:47:08
         compiled from ".\smartys\templates\seach1\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:2771655d156f456f4c6-87600115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e42f817ff902c46a2f3051183adb0e16dca13e' => 
    array (
      0 => '.\\smartys\\templates\\seach1\\searchresult.html',
      1 => 1439782844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771655d156f456f4c6-87600115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d156f4706fa4_08407940',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
    'navs' => 0,
    'cnav' => 0,
    'nav' => 0,
    'nav_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d156f4706fa4_08407940')) {function content_55d156f4706fa4_08407940($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
		<link rel="stylesheet" rev="stylesheet" href="http://chanpin.xm12t.com.cn/css/global.css" type="text/css" />
		<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/css/style.css" type="text/css" />
		<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
		<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/css/list.css" type="text/css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/js/jquery.easing.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/js/jquery.scrollTo-min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/js/jquery.mousewheel.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
smartys/templates/js/script.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<!-- 头部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- 文章列表 -->
		<section id="category">
			<ul class="clearfix">
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a><time class="fr" datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</time></li>
				<?php } ?>
			</ul>
			<!-- 分页链接 -->
			<ul class="clearfix fr">
				<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a></li>
				<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a></li>
				<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
					<li class="fl current"><a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
				<?php } else { ?>
					<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
				<?php }?>
				<?php } ?>
				<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a></li>
				<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">末页</a></li>
			</ul>
		</section>
		<!-- 边栏 -->
		<aside>
			<!-- 二级栏目列表 -->
			<section>
				<nav>
					<ul class="clearfix">
						<?php  $_smarty_tpl->tpl_vars['cnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cnav']->key => $_smarty_tpl->tpl_vars['cnav']->value) {
$_smarty_tpl->tpl_vars['cnav']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['cnav']->value['current']&&$_smarty_tpl->tpl_vars['cnav']->value['childmenu']) {?>
							<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cnav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
							<li class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?>">
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
									<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
									<?php } ?>
								</ul>
								<?php }?>
							</li>
							<?php } ?>
						<?php }?>
						<?php } ?>
					</ul>
				</nav>
			</section>
		</aside>
		<!-- 底部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>

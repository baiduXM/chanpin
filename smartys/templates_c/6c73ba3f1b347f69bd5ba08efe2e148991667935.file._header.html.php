<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-17 11:37:24
         compiled from "D:\OtherWeb\fangfan\smartys\templates\seach1\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:30155d156f471c110-26517530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c73ba3f1b347f69bd5ba08efe2e148991667935' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\seach1\\_header.html',
      1 => 1433208246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30155d156f471c110-26517530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'title' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d156f481fca5_85943743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d156f481fca5_85943743')) {function content_55d156f481fca5_85943743($_smarty_tpl) {?><header>
	<section class="top"></section>
	<section class="head">
		<h1 class="ellipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h1>
		<nav>
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
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];
echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
</a>
					<!-- 鼠标经过出现菜单 -->
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']||$_smarty_tpl->tpl_vars['nav']->value['lastest']) {?>
					<div class="nav-dropdown clearfix tst-all<?php if (!$_smarty_tpl->tpl_vars['nav']->value['childmenu']&&$_smarty_tpl->tpl_vars['nav']->value['lastest']) {?> onlylist<?php }
if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']&&!$_smarty_tpl->tpl_vars['nav']->value['lastest']) {?> onlycat<?php }?>">
						<!-- 子栏目列表 -->
						<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
						<div class="nav-dropdown-subnavs fl">
							<ul class="clearfix">
								<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
								<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];
echo $_smarty_tpl->tpl_vars['nav_list']->value['title'];?>
</a></li>
								<?php } ?>
							</ul>
						</div>
						<?php }?>
						<!-- 栏目最新动态 -->
						<?php if ($_smarty_tpl->tpl_vars['nav']->value['lastest']) {?>
						<div class="nav-dropdown-lastest fl">
							<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['lastest']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<dl class="fl tst-all">
								<dd class="cat"><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['category']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</a></dd>
								<dd><a class="img image-center" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" /></a></dd>
								<dt><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></dt>
							</dl>
							<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']&&$_smarty_tpl->tpl_vars['article']->index+1==3) {
break 1;?>
							<?php } elseif ($_smarty_tpl->tpl_vars['article']->index+1==5) {
break 1;
}?>
							<?php } ?>
						</div>
						<?php }?>
					</div>
					<?php }?>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==6) {
break 1;
}?>
				<?php } ?>
			</ul>
		</nav>
	</section>
</header><?php }} ?>

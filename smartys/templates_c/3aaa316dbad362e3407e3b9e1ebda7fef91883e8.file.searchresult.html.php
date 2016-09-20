<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-27 16:31:50
         compiled from ".\smartys\templates\3\pc\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:2820555fa11f9663666-25143579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aaa316dbad362e3407e3b9e1ebda7fef91883e8' => 
    array (
      0 => '.\\smartys\\templates\\3\\pc\\searchresult.html',
      1 => 1445934679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2820555fa11f9663666-25143579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55fa11f97effa8_23001186',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'pagenavs' => 0,
    'posnavs' => 0,
    '_pagenavs_sub3' => 0,
    'search' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa11f97effa8_23001186')) {function content_55fa11f97effa8_23001186($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<?php echo '<script'; ?>
 type="text/javascript">
	// 跳转手机页面
	<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
	if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
	    location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
	} <?php }?>
<?php echo '</script'; ?>
>

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/globle.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/main.css">
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie.css">
<![endif]-->
</head>
<body>
	<div class="wrap case">
		<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

		<div class="main">
			<div class="top group">
				<div class="title"><?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
					<h2><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
<span class="orange"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</span></h2>
					<?php } else { ?>
					
					<h2><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['en_name'];?>
<span class="orange"><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
</span></h2>
					<?php }?>
				</div>

				<div class="position"><i class="iconfont">&#xe616;</i><p>您当前所在所在位置：<a href="index.html">网站首页</a>&gt;<a href="javascript:;">关于我们</a></p></div>
			</div>
			<div class="con">
				<?php if ($_smarty_tpl->tpl_vars['search']->value['total']==0) {?>
                <p class="search_mss">没有查找到相关数据！</p>
                <?php } else { ?> 
				<div class="search_mss">
					<p>以下是您输入的关键字“<?php echo $_smarty_tpl->tpl_vars['search']->value['keyword'];?>
”，搜索结果有<span><?php echo $_smarty_tpl->tpl_vars['search']->value['total'];?>
</span>条</p>
				</div>
				
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<div class="news1_row">
					<div class="news1_con">
						<h4><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h4>
						<span>[<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
]</span>
						<p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
					</div>
				</div>
				<?php } ?>
				<?php }?>

				<!-- page[分页] -->
				<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
				
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 		
		</div>	

		<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/tap.js"><?php echo '</script'; ?>
>
</body>
</html><?php }} ?>

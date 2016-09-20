<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-02 11:08:28
         compiled from ".\smartys\templates\2\pc\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:752755f27eef284208-46010542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0d45f0c006959e38895d0e6e23811ef24e1f69b' => 
    array (
      0 => '.\\smartys\\templates\\2\\pc\\searchresult.html',
      1 => 1446433137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '752755f27eef284208-46010542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f27eef3cdd17_84388914',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'search_action' => 0,
    'contact' => 0,
    'footprint' => 0,
    'posnavs' => 0,
    'search' => 0,
    'article' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f27eef3cdd17_84388914')) {function content_55f27eef3cdd17_84388914($_smarty_tpl) {?><!DOCTYPE html>
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

<link rel="stylesheet" rev="stylesheet" href="http://chanpin.xm12t.com.cn/css/global.css" type="text/css" />

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

</head>
<!-- 关于我们 -->
<body>
	  <!-- fixed_nav layer start -->
	  <div class="fixed_nav">         
	    <div class="top_fix_wp">
	      <h1><a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1>
	    </div>
	    <nav>
	      <ul id="nav">
	        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" onClick="jarallax.jumpToProgress( 0, 2000, 30);">首页</a></li>
	        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	          
	          <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>cur<?php }?>">
	            <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>            
	          </li>           
	                        
	        <?php } ?>
	      </ul>
	    </nav>


	    <div class="search">
	      <form id="form" class="fm" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" name="fm">
	        <span class="s_ipt_wr">
	          <input type="text" id="kw" name="s" class="s_ipt" placeholder=""/>
	        </span>
	        <span class="s_btn_wr">
	          <input type="submit" class="s_btn" id="submit" value="">
	        </span>
	      </form>
	    </div>
	  
	    <p class="hot_phone">服务热线:<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></p>
	    <div class="copyright"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
	</div>  
  <!-- fixed layer end -->
	<div class="wrap">
		<div class="wrap_inner">
		<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">
			<h2><span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h2>
			<div class="con">
				<div class="ss_result">

					<?php if ($_smarty_tpl->tpl_vars['search']->value['total']==0) {?>
                    <p class="search_res">没有查找到相关数据！</p>
                    <?php } else { ?> 

					<P class="search_res">以下是您输入的关键字“<?php echo $_smarty_tpl->tpl_vars['search']->value['keyword'];?>
”，共搜索到<?php echo $_smarty_tpl->tpl_vars['search']->value['total'];?>
个结果</P>

					<ul class="list">
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
						<li class="clearfix">
							<h3><a  href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
							<p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
						</li>
						<?php } ?>										
					</ul>
					<?php }?>
					<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>

		</div>

		</div>

		<div class="top_blue"></div>
		<div class="bottom_blue"></div>
	</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/fun.js" type="text/javascript"><?php echo '</script'; ?>
>	
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>

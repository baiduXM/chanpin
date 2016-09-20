<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-03 14:18:46
         compiled from ".\smartys\templates\1\pc\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:2853255f926a34f4d15-63101633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2346b6cb1bc2ca551fcef33b65b89cba1daaddff' => 
    array (
      0 => '.\\smartys\\templates\\1\\pc\\searchresult.html',
      1 => 1446531153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2853255f926a34f4d15-63101633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f926a3648272_99941589',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'search' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f926a3648272_99941589')) {function content_55f926a3648272_99941589($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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
    
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/sub.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"><?php echo '</script'; ?>
>
       <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.kinMaxShow-1.0.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"><?php echo '</script'; ?>
>
    <style>
    .tx1 {
        behavior: url(pie.htc);
    }
    </style>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="container" class="wrapper clearfix">
         <?php echo $_smarty_tpl->getSubTemplate ('./_aside.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="main">
            <div class="crumb"> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 <span>当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> <?php } ?></span> </div>

            <div class="article">
                <div class="searchresult">
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['total']==0) {?>
                    <p class="search_res">没有查找到相关数据！</p>
                    <?php } else { ?>
                    <p class="searchtxt">以下是您输入的关键字"<span><?php echo $_smarty_tpl->tpl_vars['search']->value['keyword'];?>
</span>"，搜索结果有<?php echo $_smarty_tpl->tpl_vars['search']->value['total'];?>
条</p>

                     <ul class="resultbox">
                        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                            <li>
                            <div class="nlist_a"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span> <b><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</b></a></div>
                            <div class="nlist_word"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">[查看更多]</a></span></div>
                            </li>            
                          <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?> <?php break 1;?> <?php }?>
                        <?php } ?>
                     </ul>
                        <div class="module_page">
                            第<?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
页/共<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
 页
                            <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a> <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?> <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                            <a class="current"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a> <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a> <?php }?> <?php } ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">尾页</a></div>
                      <?php }?>
            
             </div>

            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>

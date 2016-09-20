<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 16:43:03
         compiled from ".\smartys\templates\GP0035\searchresult.html" */ ?>
<?php /*%%SmartyHeaderCode:356655d1b34b099d48-18770081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3787766a80de6d76136a47a64707dc76c5b7f3' => 
    array (
      0 => '.\\smartys\\templates\\GP0035\\searchresult.html',
      1 => 1440051129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '356655d1b34b099d48-18770081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d1b34b239980_99026127',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'global' => 0,
    'slidepic' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
    'search' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1b34b239980_99026127')) {function content_55d1b34b239980_99026127($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<?php echo '<script'; ?>
 type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
      if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
      }
    <?php }?>
    <?php echo '</script'; ?>
>

<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
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
js/function.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 

<body>
  <div class="wrap">
        <div class="top">
            <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
            <div class="public banersb">
                    <div class="focusBox" style="margin:0 auto">
                                <ul class="pic">
                              <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
                                
                                <?php } ?>       
                    
                                </ul>
                                <a class="prev" href="javascript:void(0)"></a>
                                <a class="next" href="javascript:void(0)"></a>
                                <ul class="hd">
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                 <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                   <?php } ?>
                                </ul>
                        </div>            
                                
                                </div>                             
        </div>
        <div class="public content">
        	<div class="ny_index">
            <div class="left fl">
                <div class="list_class">
           <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            	
             </div> 
             <div class="congacta">
            	<div class="a_title">
                	联系方式/<b>CONTACT us</b>
                </div>  
                <div class="lianxi">
<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us'];?>

          
                </div></div>           
            </div>   
<div class="right fr">
            <div class="detal_s">
             <div class="right_title"><span>当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
           <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
             &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
           <?php } ?></span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
  / <b><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
 </b></div>                    
            <div class="deteo">
<div class="news_detal2">
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['total']==0) {?>
                    <p class="search_res">没有查找到相关数据！</p>
                    <?php } else { ?>
                        <ul> 	
                        <p class="search_res">搜索关键词为“<span><?php echo $_smarty_tpl->tpl_vars['search']->value['keyword'];?>
</span>”的产品/文章，共搜索到<?php echo $_smarty_tpl->tpl_vars['search']->value['total'];?>
个结果：</p>
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                        <?php } ?>                        
                                                       
                                                                                
                      </ul>                                                
 <div class="module_page">   
<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a> <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a>
	<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?><a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
	<?php } else { ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
	<?php }?>
	<?php } ?>
<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">末页</a>
  <?php }?>
                   </div>                           
                    </div>        
             
                    </div>                     	
                    </div>        	        
        </div>              
                   
            </div>
        </div>
        
       <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  </div>
</body>
</html>
















<?php }} ?>

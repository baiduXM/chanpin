<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-03 14:18:46
         compiled from "D:\swap.gbpen.com\smartys\templates\1\pc\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3190155f926a3658da3-27889422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cde146aa5b78683b7321228fe9db6500ed2d3f3' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\1\\pc\\_header.html',
      1 => 1446531153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3190155f926a3658da3-27889422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f926a3774c54_08079227',
  'variables' => 
  array (
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'limit' => 0,
    'site_url' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'search_action' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f926a3774c54_08079227')) {function content_55f926a3774c54_08079227($_smarty_tpl) {?>
    <div id="header" class="wrapper">
    
        <div id="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></div>
        <div id="nav">
        <ul class="clearfix">
            <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(7, null, 0);?>
            <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);
}?>
            <li class="aa" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
            <li class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> aa" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                <ul class="sub clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> cc"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                    <?php } ?> <?php }?>
                </ul>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {
break 1;
}?>
            <?php } ?>
        </ul>
</div>
        <div id="search">
            <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                <input type="text" name="s" value="" class="sa" />
                <input type="submit" class="bta" />
                
            </form>
        </div>
        
    </div>


<div id="banner_bg">
     <div id="banner_top"></div>
     <div class="banner_box" >
    <div id="kinMaxShow"> <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
      <div> <a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
"  /></a></div>
      <?php } ?> </div>
  </div>
</div><?php }} ?>

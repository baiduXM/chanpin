<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 09:47:31
         compiled from "D:\OtherWeb\fangfan\smartys\templates\GP0058\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2992555d44558092dd2-44145706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc73d6b77f9b17926fd27242e9c5b17680495036' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\GP0058\\_header.html',
      1 => 1440380847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992555d44558092dd2-44145706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d44558138956_11309133',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'contact' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d44558138956_11309133')) {function content_55d44558138956_11309133($_smarty_tpl) {?>      <div class="header">
          <div class="fl logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="479" height="124" /></a></div>
            <div class="search">

<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
  <input type="text" name="s" value="" style="width:86px;" />
  <input type="submit" value="搜索" />
</form>

            </div>
            <div class="tell">咨询热线：<span class="num"><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></div>
        </div>
        <div class="menu">
          <ul class="nav">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                  <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                      <ul class="sunav">
                        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
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
        </div>
        <!-- banner -->
        <div class="baner">
      <div class="focusBox" style="margin:0 auto">
      <ul class="pic">
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" width="988" height="254" /></a></li>
                    
                <?php } ?>
              
      </ul>
            <ul class="hd">
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
              <li></li>
            <?php } ?>
      </ul>
  </div>

    </div><?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 16:43:04
         compiled from "D:\OtherWeb\fangfan\smartys\templates\GP0035\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1872555d1b34b413e99-07732322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c998c8db14bb28cdf46164ba9b81ef67ff0ee4cd' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\GP0035\\_footer.html',
      1 => 1440051129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872555d1b34b413e99-07732322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d1b34b43e3f2_33791111',
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1b34b43e3f2_33791111')) {function content_55d1b34b43e3f2_33791111($_smarty_tpl) {?>        <div class="public footer">
        <div class="footmenu"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> |
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> |
    <?php } ?></div>
        <div class="footword"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
  技术支持：<a href="http://www.12t.cn/default.html" target="_blank">厦门易尔通网络科技有限公司</a> 人才支持：<a href="http://www.xgzrc.com/" target="_blank">厦门新工作人才网</a></div>
        </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-21 17:27:53
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:13652561f4f2f0bf676-39612784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '275985ccb8a7cd9935a9cd4adbf68d06012bc56e' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_right_nav.html',
      1 => 1445419657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13652561f4f2f0bf676-39612784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561f4f2f0e7884_22992061',
  'variables' => 
  array (
    'site_url' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f4f2f0e7884_22992061')) {function content_561f4f2f0e7884_22992061($_smarty_tpl) {?><section>
	 <h2 class="top_pro"><span>当前位置:<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  -<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  <?php } ?></span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 <em><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</em>
</h2>
</section><?php }} ?>

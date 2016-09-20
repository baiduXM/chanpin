<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-21 17:27:53
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:15140561c572de59c60-51461717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993ead21b6b9a0ff0c71cbc03933de47794462a0' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_links.html',
      1 => 1445419657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15140561c572de59c60-51461717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561c572de745a9_30629973',
  'variables' => 
  array (
    '_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c572de745a9_30629973')) {function content_561c572de745a9_30629973($_smarty_tpl) {?>
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_links']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a> |
	<?php } ?>
<?php }} ?>

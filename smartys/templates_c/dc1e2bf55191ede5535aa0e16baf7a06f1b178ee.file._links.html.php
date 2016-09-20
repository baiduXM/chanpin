<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-19 13:57:12
         compiled from "D:\swap.gbpen.com\smartys\templates\3\pc\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:2655356248638d20cf7-01963124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc1e2bf55191ede5535aa0e16baf7a06f1b178ee' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\3\\pc\\_links.html',
      1 => 1445223726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2655356248638d20cf7-01963124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56248638d3b027_54166106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56248638d3b027_54166106')) {function content_56248638d3b027_54166106($_smarty_tpl) {?><select name="pageselect" onchange="self.location.href=options[selectedIndex].value" >
 
 <option>友情链接</option>	

	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_links']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
	 <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</option>	
	<?php } ?>

 </select>
<?php }} ?>

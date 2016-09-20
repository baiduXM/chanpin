<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-20 15:18:30
         compiled from "D:\swap.gbpen.com\smartys\templates\1\pc\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:205325625eac6354cc4-11739796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2627c2b6e204a2eb5c4eb5703724cdaee8177b12' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\1\\pc\\_links.html',
      1 => 1445325404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205325625eac6354cc4-11739796',
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
  'unifunc' => 'content_5625eac6372188_59251944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625eac6372188_59251944')) {function content_5625eac6372188_59251944($_smarty_tpl) {?><select name="pageselect" onchange="self.location.href=options[selectedIndex].value" >
 
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

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-28 10:51:57
         compiled from "D:\swap.gbpen.com\smartys\templates\1\pc\_page_normal.html" */ ?>
<?php /*%%SmartyHeaderCode:14366562eef0eac4884-98755063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4666ca2552e5805606d3e46c4186eb9a6c9d41dd' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\1\\pc\\_page_normal.html',
      1 => 1446000587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14366562eef0eac4884-98755063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_562eef0eb3fc19_52064476',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562eef0eb3fc19_52064476')) {function content_562eef0eb3fc19_52064476($_smarty_tpl) {?><!-- page[分页] -->
<div class="page_normal">

	<span><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {
echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];
} else { ?>javascript:;<?php }?>">&lt;&lt;&nbsp;首页</a></span>
	<span><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {
echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];
} else { ?>javascript:;<?php }?>">上一页</a></span>
	 
    <ul class="clearfix">		
		
		<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
			<li class="cur"><a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php } else { ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php }?>
		<?php } ?>
		
	</ul>

	<span><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {
echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];
} else { ?>javascript:;<?php }?>">下一页</a></span>
	<span><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {
echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];
} else { ?>javascript:;<?php }?>">末页&nbsp;&gt;&gt;</a></span>

</div><?php }} ?>

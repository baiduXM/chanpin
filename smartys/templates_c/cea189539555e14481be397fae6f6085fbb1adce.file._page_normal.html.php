<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-27 16:31:51
         compiled from "D:\swap.gbpen.com\smartys\templates\3\pc\_page_normal.html" */ ?>
<?php /*%%SmartyHeaderCode:164065620b2e446f383-41489142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea189539555e14481be397fae6f6085fbb1adce' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\3\\pc\\_page_normal.html',
      1 => 1445934679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164065620b2e446f383-41489142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5620b2e44f70c8_91148266',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620b2e44f70c8_91148266')) {function content_5620b2e44f70c8_91148266($_smarty_tpl) {?><!-- page[分页] -->
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

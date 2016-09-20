<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-02 11:08:28
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_page_normal.html" */ ?>
<?php /*%%SmartyHeaderCode:18050561b6ca0179416-81590359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0111422305375c8f3d4f5bb3022481f802e28a51' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_page_normal.html',
      1 => 1446433137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18050561b6ca0179416-81590359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561b6ca01f5da9_39479921',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b6ca01f5da9_39479921')) {function content_561b6ca01f5da9_39479921($_smarty_tpl) {?><!-- page[分页] -->
<div class="page_normal">
	 
    <ul class="clearfix">
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {
echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];
} else { ?>javascript:;<?php }?>">&lt;&lt;&nbsp;首页</a></li>
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {
echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];
} else { ?>javascript:;<?php }?>">上一页</a></li>
		<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
			<li class="fl cur"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php } else { ?>
			<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php }?>
		<?php } ?>
		
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {
echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];
} else { ?>javascript:;<?php }?>">下一页</a></li>
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {
echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];
} else { ?>javascript:;<?php }?>">末页&nbsp;&gt;&gt;</a></li>
		
	</ul>
</div><?php }} ?>

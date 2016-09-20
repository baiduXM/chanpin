<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 10:13:06
         compiled from "D:\OtherWeb\fangfan\smartys\templates\GP0058\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1905155d445582b89d7-64506016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ad1867dba6f903e545f527534329c89c455cb2e' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\GP0058\\_footer.html',
      1 => 1440036541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905155d445582b89d7-64506016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d4455834c1f9_49124487',
  'variables' => 
  array (
    'global' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4455834c1f9_49124487')) {function content_55d4455834c1f9_49124487($_smarty_tpl) {?>
    <div class="bottom">
    	<dl>

		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list7']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list7']['name'];?>
</a> 



        </dl>
		<dl><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
 电话：<?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
 手机：<?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
</dl>
<dl class=" banquan">技术支持：<a href="http://www.12t.cn">厦门易尔通网络科技有限公司</a> 人才支持：<a href="http://www.xmrc.com.cn">厦门人才网</a> </dl>
    </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  <?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-03 14:18:46
         compiled from "D:\swap.gbpen.com\smartys\templates\1\pc\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:944355f926a38eb585-13546738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3a68394ea10a11ab0ec1e776f49a7fdc2068b2' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\1\\pc\\_footer.html',
      1 => 1446531153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944355f926a38eb585-13546738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f926a3922905_33279135',
  'variables' => 
  array (
    'global' => 0,
    'friend' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f926a3922905_33279135')) {function content_55f926a3922905_33279135($_smarty_tpl) {?><div id="footer_bg">
<div id="footer" class="wrapper">
<div id="friendlink">
<div class="title"> <div class="ch">友情链接</div><div class="en">friendlink</div></div>
<div class="inner clearfix">
<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['friend']->value['image'];?>
" /></a>
<?php } ?> 
</div>
</div>

<div id="copyriht"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
</div>


</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

<?php }} ?>

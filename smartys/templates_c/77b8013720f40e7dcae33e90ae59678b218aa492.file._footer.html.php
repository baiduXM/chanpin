<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-27 17:38:40
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:555455f27eef662127-66524967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b8013720f40e7dcae33e90ae59678b218aa492' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_footer.html',
      1 => 1445938608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555455f27eef662127-66524967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f27eef698926_23454690',
  'variables' => 
  array (
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f27eef698926_23454690')) {function content_55f27eef698926_23454690($_smarty_tpl) {?>	<div class='footer'>
			<ul class="fo_mune">
			 <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
  </a>|</li>     
				
			<?php } ?>
			</ul>
			
			<span><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</span>
				
			
				
		</div>


			
<?php }} ?>

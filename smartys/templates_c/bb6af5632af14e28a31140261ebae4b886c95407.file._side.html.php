<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-19 16:15:01
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_side.html" */ ?>
<?php /*%%SmartyHeaderCode:4342561b5cdb466b87-21501612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6af5632af14e28a31140261ebae4b886c95407' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_side.html',
      1 => 1445240320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4342561b5cdb466b87-21501612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561b5cdb5e3f53_45528079',
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b5cdb5e3f53_45528079')) {function content_561b5cdb5e3f53_45528079($_smarty_tpl) {?><div class="side clearfix">
	<div class="side_inner">
		


<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<h4><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h4>
<nav>
<ul class="mtree">
	<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
    <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
        <ul>
          <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
             <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                <ul>
                  <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                  <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></li>
                  <?php } ?>
                </ul> 
               <?php }?>                                             
            </li>
          <?php } ?>
        </ul>
        <?php }?>                            
    </li>
    <?php } ?>					
</ul>
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<h4><?php echo $_smarty_tpl->tpl_vars['_side']->value['pagenavs']['name'];?>
</h4>
<nav>
	
	<ul class="mtree">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_side']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
	        <ul>
	          <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
	            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
	             <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
	                <ul>
	                  <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
	                  <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></li>
	                  <?php } ?>
	                </ul> 
	               <?php }?>                                             
	            </li>
	          <?php } ?>
	        </ul>
	        <?php }?>                            
	    </li>
		<?php } ?>
	</ul>
</nav>
<?php }?>

</div>
</div><?php }} ?>

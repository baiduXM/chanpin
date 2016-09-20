<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-22 15:08:31
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_aside.html" */ ?>
<?php /*%%SmartyHeaderCode:225356273f79e92573-64553276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ac2efd2ece57c6fbf338d08dff16ef86f331ea' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_aside.html',
      1 => 1445497300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225356273f79e92573-64553276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56273f7a0ab765_38907220',
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_aside' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56273f7a0ab765_38907220')) {function content_56273f7a0ab765_38907220($_smarty_tpl) {?>
<div class="sidebar">
  <div class="subnav">
    <div class="list_class"> 

<!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>

	<div class="alefttitle"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
 / <span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</span></div>	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
    <div class="category">
	<ul class="listbg clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>" class="h_top <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="second clearfix">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>                
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];
}?>" class="h_topa <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                    <ul class="third clearfix">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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
    </div>
</nav>
        
        
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>
	<div class="alefttitle"><?php echo $_smarty_tpl->tpl_vars['_aside']->value['pagenavs']['en_name'];?>
/ <span><?php echo $_smarty_tpl->tpl_vars['_aside']->value['pagenavs']['name'];?>
</span><</div>	
     <div class="category">
	<ul class="listbg clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_aside']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="second clearfix">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];
}?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                    <ul class="third clearfix">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
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
    </div>
</nav>

<?php }?>
 </div>
  </div>
</div>





<?php }} ?>

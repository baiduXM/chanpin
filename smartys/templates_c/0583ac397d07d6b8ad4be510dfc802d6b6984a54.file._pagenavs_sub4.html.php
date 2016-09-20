<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-16 10:37:00
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_pagenavs_sub4.html" */ ?>
<?php /*%%SmartyHeaderCode:204875618b11c04b265-19849695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0583ac397d07d6b8ad4be510dfc802d6b6984a54' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_pagenavs_sub4.html',
      1 => 1444963009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204875618b11c04b265-19849695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5618b11c1bb5a6_07050339',
  'variables' => 
  array (
    'site_url' => 0,
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_pagenavs_sub4' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5618b11c1bb5a6_07050339')) {function content_5618b11c1bb5a6_07050339($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/pagenavs_sub4.css" rel="stylesheet" type="text/css" />
<!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
    <nav>        
        <div class="listclass">
            <div class="index_title">
                <b><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
</b><strong><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</strong><span></span>
              </div>            
            <div class="category">
             <ul>
             <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>" class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                    <ul class="second">
                      <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];
}?>"  class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                         <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                            <ul class="third">
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
        </div>    
    </nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
    <nav>
            <div class="listclass">
            <div class="index_title">
                <b><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub4']->value['pagenavs']['en_name'];?>
</b><strong><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub4']->value['pagenavs']['name'];?>
</strong><span></span>
              </div>            
            <div class="category">
             <ul>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub4']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['nav']->value['link'];
}?>" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                    <ul class="second">
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
                            <ul class="third">
                              <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                              <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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
        </div>   
    </nav>

<?php }?><?php }} ?>

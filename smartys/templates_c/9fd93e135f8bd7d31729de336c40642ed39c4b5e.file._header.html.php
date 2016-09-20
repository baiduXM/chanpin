<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-27 17:38:40
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:590855f27eef3de1a7-81505179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd93e135f8bd7d31729de336c40642ed39c4b5e' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_header.html',
      1 => 1445938608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590855f27eef3de1a7-81505179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55f27eef4fce70_97096957',
  'variables' => 
  array (
    'logo' => 0,
    'contact' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'site_url' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f27eef4fce70_97096957')) {function content_55f27eef4fce70_97096957($_smarty_tpl) {?>    <div class='header '>
        <h1 class='logo fl'><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></h1>
        <div class="h_right fr">
            <span class="tel ">电话：<i><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
 </i></span>
            <div class='search fr'>
              <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                <input name="s" type="text" value="" class='text_01' />
                <input type="submit" class='submit_01' />
              </form>
            </div>
        </div>
    </div>
        <div class='mune'>  
            <ul id="nav" class="nav" >
             <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
              <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {
$_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);
}?>
                <li class="nLi " ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></li>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                <li class="nLi  <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
 </a>
                        <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                            <ul class="sub">
                            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class='banner '>
                <div id="slideBox" class="slideBox height_01">
                    <div class="hd">
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                              <li></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
"/></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                    <a class="prev" href="javascript:void(0)"></a>
                    <a class="next" href="javascript:void(0)"></a>
                </div>
        </div><?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-24 16:43:04
         compiled from "D:\OtherWeb\fangfan\smartys\templates\GP0035\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:884755d1b34b250200-84076176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28dc542d92829c4d551da8cc37acb51b8b76e76a' => 
    array (
      0 => 'D:\\OtherWeb\\fangfan\\smartys\\templates\\GP0035\\_header.html',
      1 => 1440051129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884755d1b34b250200-84076176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d1b34b30c082_36205878',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'nav' => 0,
    'nav_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d1b34b30c082_36205878')) {function content_55d1b34b30c082_36205878($_smarty_tpl) {?>  <div class="public header">
            	<div class="logo fl">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></a>
                </div>
                <div class="righthome fr">
                	<div class="search fr">
                     <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                    <span>全站搜索:</span><input type="text" name="s" value="" class="txta" /><input type="submit" class="bta" value="搜索" />     	
                        </form>                    
                    
                    	
                    </div>                    
                </div>
            </div>
<div class="public menu">
<ul id="nav" class="nav clearfix">
        <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {
$_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);
}?>
			<li class="nLi on" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
%">
            	<h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></h3>
			</li>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
			<li  class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1);?>
%">
					<h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
				<ul class="sub clearfix">
                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
					<?php } ?>
                    <?php }?>
				</ul>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['litmit']->value) {
break 1;
}?>
          <?php } ?>
                                          
		</ul>
                    </div>      
                    




<?php }} ?>

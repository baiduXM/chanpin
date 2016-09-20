<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-21 17:27:53
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_num.html" */ ?>
<?php /*%%SmartyHeaderCode:32242561f4f2f148a59-42586687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff9c011b57b2482cbf52af5e205f5e15b6953a3' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_num.html',
      1 => 1445419657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32242561f4f2f148a59-42586687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561f4f2f192323_29323226',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f4f2f192323_29323226')) {function content_561f4f2f192323_29323226($_smarty_tpl) {?><section>
	
              第<?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
页/共<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
 页      
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">&laquo; 上一页</a>
              <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                  <a class="current"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
                <?php } else { ?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
                <?php }?>
              <?php } ?>


              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页 &raquo;</a>
            
</section><?php }} ?>

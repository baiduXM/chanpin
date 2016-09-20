<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-16 17:45:48
         compiled from "D:\swap.gbpen.com\smartys\templates\1\pc\_num.html" */ ?>
<?php /*%%SmartyHeaderCode:21235620c74c42f9d8-62899314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa470ac11c6bf02328358fc1d81c80a2210755fe' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\1\\pc\\_num.html',
      1 => 1444988668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21235620c74c42f9d8-62899314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5620c74c47bf84_19908699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620c74c47bf84_19908699')) {function content_5620c74c47bf84_19908699($_smarty_tpl) {?>
               
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">[第一页]</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">[上一页]</a>
                <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                    <a class="cur"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                <?php }?>
                <?php } ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">[下一页]</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">[最后页]</a>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-21 17:27:53
         compiled from "D:\swap.gbpen.com\smartys\templates\2\pc\_seek.html" */ ?>
<?php /*%%SmartyHeaderCode:31997561f4f2f100327-19906586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78944fdfa2f6fa540d44a382403b05fda49cafcf' => 
    array (
      0 => 'D:\\swap.gbpen.com\\smartys\\templates\\2\\pc\\_seek.html',
      1 => 1445419657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31997561f4f2f100327-19906586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_561f4f2f13d794_95700215',
  'variables' => 
  array (
    'search' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f4f2f13d794_95700215')) {function content_561f4f2f13d794_95700215($_smarty_tpl) {?> <?php if ($_smarty_tpl->tpl_vars['search']->value['total']==0) {?>
                    <p class="search_res">没有查找到相关数据！</p>
                    <?php } else { ?>
           <p class="t">搜索关键词为“<span><?php echo $_smarty_tpl->tpl_vars['search']->value['keyword'];?>
</span>”的产品/文章，共搜索到<?php echo $_smarty_tpl->tpl_vars['search']->value['total'];?>
个结果：</p>
           <ul class="module_news">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
<span class="fr" datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate">(<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
)</span></a></li>
              <?php } ?>
            </ul>
            <?php }?><?php }} ?>

<?php
$smarty = new Smarty();
$smarty->template_dir = './smartys/templates/';
$smarty->compile_dir  = './smartys/templates_c/';
$smarty->config_dir   = './smartys/configs/';
$smarty->cache_dir    = './smartys/cache/';

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 0;
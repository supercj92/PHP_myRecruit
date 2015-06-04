<?php
require_once '../libs/Smarty.class.php';
require_once '../model/Pagination.class.php';
require_once '../model/jobsService.class.php';
require_once '../model/comfun.class.php';
require_once '../model/companyService.class.php';

$smarty=new Smarty();
$jobS=new jobsService();
$compS=new companyService();
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
$smarty->template_dir="../templates/";
$smarty->compile_dir="../templates_c/";
$comf=new Comfun();
$smarty->assign("isLogin",$isLogin=$comf->isLogin());
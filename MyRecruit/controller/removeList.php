<?php
require_once 'smarty_common.php';
$list_id=$_GET['listid'];
$sign=$jobS->removeList($list_id);
header("location:/myrecruit/personal/postedJobs.php");

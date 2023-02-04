<?php
include_once('test.php');

$apiObj = new COD_API("MTUyMjk2MjgwMjQ1Njg5MjE5Nzk6MTY3Mjk1MjU0NzExMDoyMjYxMjY5ZTUyZmJiNGFlZDAxNGFlN2JiNDg1MTAwNw");

$res = $apiObj->GET_MODERN_WARFARE_STATS("TarsalFireBreath", "xbox");
print_r($res);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/13 0013
 * Time: 下午 4:41
 */
header('Content-type:text\html;charset=utf-8');

date_default_timezone_set('Asia/Shanghai');
session_save_path("E:/phpweb/project/sessionpath");
session_start();
var_dump($_SESSION);

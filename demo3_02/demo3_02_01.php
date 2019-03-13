<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/13 0013
 * Time: 下午 4:41
 */
header('Content-type:text\html;charset=utf-8');
/*
 * cookie技术
 *      存储少量的数据在客户端，每次访问对应网站时会把cookie带到服务器
 *      在服务端返回数据给客户端的时候，可以指定客户端将某些数据存储到客户端的cookie中
 * */
date_default_timezone_set('Asia/Shanghai');
//include_once 'set.php';
var_dump($_COOKIE);
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/13 0013
 * Time: 下午 4:41
 */
header('Content-type:text\html;charset=utf-8');

date_default_timezone_set('Asia/Shanghai');
setcookie('member[name]','y',time()-20);
setcookie('member[url]','www.baidu.com',time()-20);

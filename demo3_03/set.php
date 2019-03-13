<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/13 0013
 * Time: 下午 4:41
 */
header('Content-type:text\html;charset=utf-8');

date_default_timezone_set('Asia/Shanghai');
/*
 * 什么时候往资料库里面写数据的？
 * 是整个脚本执行完毕后，一次性把数据库写到资料库中
 *
 * */
session_save_path("E:/phpweb/project/sessionpath");
session_start();
if (isset($_SESSION['username'])){
    exit($_SESSION['username']);
}
if (isset($_POST['submit'])){
    if ($_POST['name']=='y' || $_POST['name']=='z'||$_POST['name']=='b'){
        $_SESSION['username']=$_POST['name'];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post" accept-charset="utf-8">
    <input type="text" name="name"/>
    <input type="submit" name="submit" value="点击" />

</form>
</body>
</html>

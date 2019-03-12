<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 5:27
 */
header('Content-type:text/html;charset=utf-8');
class MYSQL extends mysqli{
    //public $result;
    public function __construct($host, $username, $passwd, $dbname, $port)
    {
        @parent::__construct($host, $username, $passwd, $dbname, $port);
        if ($this->connect_errno){
           // exit($this->connect_error);
            //抛出异常
            //抛出的内容必须是Exception类的实例或者其子类的实例
            throw new Exception($this->connect_error);

        }
        $this->set_charset("utf-8");
    }
    public function  execute($query){
        $this->result=$this->query($query);
        /*if ($this->errno){
            exit($this->error);
        }*/
        throw  new Exception($this->error);
    }
}

class DException extends Exception{
    public function test(){
        echo "<p>{$this->getMessage()}</p>";
        echo "<p>{$this->getFile()}</p>";//出错文件
        echo "<p>{$this->getLine()}</p>";
    }
}




$host='localhost';
$username='root';
$passwd='1998815wetyjkxg';
$dbname='yzbbbs';
$port=3306;
$db=new MYSQL($host,$username,$passwd,$dbname,$port);


//try{
//    $db=new MYSQL($host,$username,$passwd,$dbname,$port);
//    }catch (Exception  $e){
//    echo "<p>{$e->getMessage()}</p>";
//    echo "<p>{$e->getFile()}</p>";//出错文件
//    echo "<p>{$e->getLine()}</p>";//代码行数
//
//    echo '这里出现了异常';
//}

try{
    $db->execute("select* from yzb_father_module1");
}catch (Exception $e){
    echo "<p>{$e->getMessage()}</p>";
    echo "<p>{$e->getFile()}</p>";//出错文件
    echo "<p>{$e->getLine()}</p>";//代码行数
}
//var_dump($db->result->fetch_all());

/*$db->execute("select *from yzb_father_module");
var_dump($db->result->fetch_all());*/
/*
 *异常与错误处理：
 *
 *      异常：
 *          我们的程序在运行的时候，正常情况下不会出现问题，但是在一些特殊的情况下回出现问题
 *      异常处理：
 *          我们可以通过php的异常处理机制来妥善的处理这些异常
 *
 *          要想捕获到抛出的异常，必须要使用下面的语句结构
 *          try{
 *              可能抛出异常的程序
 *          }catch(Exception $e){
 *              如果上面程序抛出异常，那么则跳转到这里来执行
 *          }finally{
 *              不管上面的异常有没有被捕获都会执行
 *          }
 *
 *          注意：
 *              1.如果一个异常没有被捕获，php会产生一个致命错误并且报出“未捕获的异常。。”信息，除非设置一个用户定义的catch
 *              2.当一个异常抛出，try里面之后的语句代码将不会继续执行，php会尝试查找与之匹配的catch
 *              3.抛出的异常会一层层的传到最初执行的代码那边（如果在中间没有被捕获的话）
 *              4.每个try都必须至少有一个相应的catch或finally块
 *              5.当Exception类不够用的时候，我们完全可以拓展它
 *              6.抛出对象必须是异常类（Exception）的一个实例或异常的子类的实例
 *
 *      错误：
 *          无论什么情况都是错误
 *
 *
 *
 * */



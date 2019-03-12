<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 2:18
 */

/*
 * 类型约束:
 *      是一个锦上添花的功能
 *      我们在定义方法的时候，我们可以指定我们的参数接收声明类型的数据
 *      不能指定标量类型
 *      可以指定对象，接口，数组
 *  */
abstract class Humanity{
    public $name;
    public $sex;
    public $iq=10;
    protected $money=100;
    const BIRTHPLACE='地球';
    public static $count=0;
    public  function  __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex=$sex;
    }
    abstract  public function eat($food);
    public function hello(){
        self::$count++;
        echo '我是来自'.self::BIRTHPLACE.'的人类';
    }
}

class Student extends Humanity
{
    const BIRTHPLACE = '火星';
    public $SID;
//    public function __set($name,$value){
//        echo "<p>{$name}:{$value}</p>";
//    }
//    public function __get($name)
//    {
//        echo "<p>{$name}</p>";
//        return $this->money;
//    }
//    public function __call($name, $arguments)
//    {
//        return $this->name($arguments[]);
//    }

    public function test($subject)
    {
        echo "{$this->name}正在考{$subject}";
    }

    public function eat($food)
    {
        echo "{$this->name}快速吃{$food}";
    }


    public function hello()
    {
        parent::hello();
        echo '我是来自' . self::BIRTHPLACE . '的学生';
    }
   /* public function workTheDog(Dog $a){//指定类型

    }*/
   public function workTheDog(Dog $b){//指定接口类型

   }

}
interface Dog{

}
class aiYa implements Dog {

}
$hanMM =new Student('韩梅梅','女');
//var_dump($hanMM->money);
$a=new aiYa();
$hanMM->workTheDog($a);
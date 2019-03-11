<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11 0011
 * Time: 下午 3:22
 */
header('Content-type:text/html; charset=utf-8');
class Humanity{
    public $name;
    public $sex;
    public $iq=10;
    const BIRTHPLACE='地球';
    public static $count=0;
    public  function  __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex=$sex;
    }
    public function eat($food){
        echo "{$this->name}正在吃{$food}";
    }
    public function hello(){
        self::$count++;
        echo '我是来自'.self::BIRTHPLACE.'的人类';
    }
}

class Student extends Humanity{
    const BIRTHPLACE = '火星';
    public $SID;
    public function test($subject){
        echo "{$this->name}正在考{$subject}";
    }

    public function eat($food)
    {
        echo "{$this->name}好能吃{$food}";
    }
    public function hello()
    {
        parent::hello();
        echo '我是来自'.self::BIRTHPLACE.'的学生';
    }
}

$hanMM=new Humanity('韩梅梅','女');
$hanMM->hello();
echo Humanity::$count;

$liLei= new Student('李雷','男');
$liLei->hello();

/*
 * 范围解析操作符::
 * 作用：
 *  1.访问类里的静态成员
 *      怎样定义
 *          在定义类属性的时候在可见性的前面或后面加上关键字static
 *              static 可见性 属性
 *                  访问这些属性时和类常量一样，不一样的是：类常量不能修改其值，静态属性可以修改值
 *                  注意：需要加上$
 *                  静态里面不可以使用$this
 *                  self::$名
 *              static 可见性 方法(){}
 *      作用
 *          静态成员和具体的实例没有关系，我们在使用这些成员的时候无需通过具体的实例
 *
 *
 *  2.访问类里面的常量
 *      类内部如何访问：
 *          self::类常量名称   当前类常量
 *          parent::类常量名称 访问父类常量
 *      类外部如何访问：
 *          类名称::类常量名
 *
 *  3.在子类里面访问父类中被覆盖的方法
 *       parent::方法名
 * */


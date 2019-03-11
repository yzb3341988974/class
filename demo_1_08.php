<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11 0011
 * Time: 下午 3:22
 */
header('Content-type:text/html; charset=utf-8');
abstract class Humanity{
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
    abstract  public function eat($food);
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
        echo "{$this->name}快速吃{$food}";
    }
    public function hello()
    {
        parent::hello();
        echo '我是来自'.self::BIRTHPLACE.'的学生';
    }
}

class Worker extends Humanity {
    public function eat($food)
    {
        echo "{$this->name}吃{$food}";
    }

}
/*
 * 抽象类：
 *      从语法上去限制某个类不能被直接实例化，限制一个父类不能被直接实例化
 *      abstract
 *
 * 抽象方法：
 *      在父类定义好,子类必须定义具体功能
 *      拓展类的抽象方法的可见性必须大于或等于抽象方法定义的可见性
 *      参数要一致
 *      只有抽象类里面才能有抽象方法，抽象类里不一定要有抽象方法
 * */

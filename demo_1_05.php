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
    public  function  __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex=$sex;
    }
    public function eat($food){
        echo "{$this->name}正在吃{$food}";
    }
}
//继承:
//我们在定义某个类的时候，可以指定这个类根据程序中已经存在的某个类派生而来
//Student这个类继承了Humanity这个类
//Student是Humanity的子类，Humanity是Student的父类
//子类继承了父类的属性和方法，相当于子类中有和父类一样的属性和方法,
//子类还可以定义自己的属性和方法
class Student extends Humanity{
    public $SID;
    public function test($subject){
        echo "{$this->name}正在考{$subject}";
    }
}
class  Worker extends  Humanity{
    public  function  work($str){
        echo "{$this->name}正在{$str}";
    }
}
class  classLeder extends  Student {
    public  function mange($str){
        echo "{$this->name}:{$str}";
    }

}
$hanMM=new Student('韩梅梅','女');
echo $hanMM->test('数学');

$leiFen=new Worker('雷锋','男');
$leiFen->work('修铁路');


$liLei=new classLeder('李雷','男');
$liLei->mange('哈哈哈哈');
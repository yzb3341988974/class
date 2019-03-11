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

class Student extends Humanity{
    public $SID;
    public function test($subject){
        echo "{$this->name}正在考{$subject}";
    }
    //方法重写，相当于在子类中覆盖了父类的方法,不想被重写就在函数前面加上final
    //比如 final public function eat($food){}
    //参数的个数要和父类的一致，但构造函数的参数个数可以不和父类的一致
    //父类中被覆盖的方法不会再执行
    //如何在子类中去访问被覆盖的父类方法
    public function eat($food)
    {
        echo "{$this->name}好能吃{$food}";
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
echo $hanMM->eat('香蕉');


//返回父类名
echo get_parent_class($hanMM);

//和instanceof类似
var_dump( $hanMM instanceof Humanity);
//还可以判断对象是否是当前类的子类的实例
var_dump($hanMM instanceof Student);



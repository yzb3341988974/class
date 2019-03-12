<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 1:33
 */

header('Content-type:text/html; charset=utf-8');

trait tA{
    public function a(){

    }
    public function b(){

    }
    public function ojbk(){

    }
}
trait tB{
    public function c(){

    }
    public function d(){

    }
    public function ojbk(){

    }
}
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

class Student extends Humanity
{
    const BIRTHPLACE = '火星';
    public $SID;

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
    //使用多个
    use tA,tB{//冲突解决
        tA::ojbk insteadof tB;
        tB::ojbk as ok;//仍然访问被替换的方法,使用前必须解决冲突
    }
}
abstract class dog{

}
class Hadiss extends dog{
    use tA;
}

$hanMM =new Student('韩梅梅','女');
$hanMM->ojbk();
/*
 * traits
 * 
 *      它使类里的代码更加灵活的被调用
 *      traits和include有点类似
 *          通过include技术我们可以引入文件
 *          通过traits技术我们可以引入代码
 *      使用实际
 *          当我们的类有不同的父类时，那当这些类使用到相同的一些方法时应该怎么办
 *      优先级：从低到高
 *          父类里面的同名方法
 *          trait里面的同名方法
 *          本类里面 的同名方法
 *      as可以修改方法的可见性
 *          a as private
 *      as复制一个方法并起另外一个名称
 *          a as private aPrivate
 *      在trait中使用trait，要注意解决冲突
 *          trait tC{
 *                  use tA,tB{
 *                      tA::ojbk insteadof tB;
 *                  }
 *          }
 *      抽象成员
 *          在具体类中使用trait方法时，要去实现抽象方法
 * */
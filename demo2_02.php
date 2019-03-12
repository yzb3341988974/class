<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 2:18
 */

/*魔术方法
 *      我们在定义类的时候，可以在类里写上10多个魔术方法，这些方法与特殊的作用.
 *      1.魔术方法在特定的时机会自动执行
 *      2.魔术方法以__开头
 *          (1).__set($name,$value)
 *                  在给不可访问的属性赋值时会自动执行
 *              public function __set($name,$value){
                       echo "<p>{$name}:{$value}</p>";
                }
 *              必须声明为public
 *          (2).__get($name)
 *                  获取不可以访问的属性的name
 *                  public function __get($name)
                    {
                    echo "<p>{$name}</p>";
                    return $this->money;
                    }
                必须声明为public
            (3).__call($a,$b)
                    在访问类里面不可访问的类方法时执行这个方法，$a函数名,$b函数值为数组

 * */
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
    public function __set($name,$value){
        echo "<p>{$name}:{$value}</p>";
    }
    public function __get($name)
    {
        echo "<p>{$name}</p>";
        return $this->money;
    }
    public function __call($name, $arguments)
    {
        return $this->name($arguments[]);
    }

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

}
$hanMM =new Student('韩梅梅','女');
//var_dump($hanMM->money);
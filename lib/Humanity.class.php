<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 3:13
 */
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

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 3:14
 */
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


}
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
    public function  __construct($name,$sex)
    {
        //构造函数,可以进行初始化,new的时候首先执行这个函数
        $this->name=$name;
        $this->sex=$sex;
    }
    public  function  __destruct()
    {
        // TODO: Implement __destruct() method.
        //析构函数,销毁对象的时候调用
        echo "{$this->name}被销毁 ";
    }

    public function eat($food){
        echo "{$this->name}正在吃{$food}";
    }
}

$hanMM=new Humanity('韩梅梅','女');
$hanMM->eat('苹果');

$xiaoZhao=new Humanity('赵','男');
echo $xiaoZhao->name;

unset($hanMM);
unset($xiaoZhao);

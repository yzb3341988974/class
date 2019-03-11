<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11 0011
 * Time: 下午 3:22
 */
header('Content-type:text/html; charset=utf-8');
/*
 * 可见性（访问控制）
 *      是我们类里的属性和方法的可见性，控制着对应的属性和方法在哪些地方可以访问，哪些地方不可以访问
 *      我们在定义类属性时，必须在前面加上public，protected，private三选一
 *      可以省略可见性默认是public
 *
 * 我们具体在哪里访问属性;
 *      本类里面
 *              可以访问可见性为public的属性
 *              可以访问可见性为protected的属性
 *              可以访问可见性为private的属性
 *      子类里面
 *              可以访问可见性为public的属性
 *              可以访问可见性为protected的属性
 *              不可以访问可见性为private的属性
 *      类的外面
 *              可以访问可见性为public的属性
 *              不可以访问可见性为protected的属性
 *              不可以访问可见性为private的属性
 *
 *
 *
 * */
class ClassA{
    public $public='我是公共的';
    protected $protected='我是受保护的';
    private  $private='我是私有的';
    public function printVar(){
        echo "<p>本类：{$this->public}</p>";
        echo "<p>本类：{$this->protected}</p>";
        echo "<p>本类：{$this->private}</p>";
    }
}
class ClassB extends ClassA{
    public function printVar(){
        echo "<p>子类：{$this->public}</p>";
        echo "<p>子类：{$this->protected}</p>";
        //echo "<p>子类：{$this->private}</p>";
    }
}
$ClassB=new ClassB();
echo $ClassB->public;











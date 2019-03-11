<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11 0011
 * Time: 下午 3:22
 */
header('Content-type:text/html; charset=utf-8');
interface iA{
    public function aa();
    public function bb();
}
class ClassA implements iA {
    public function aa()
    {
        // TODO: Implement aa() method.
    }
    public function bb()
    {
        // TODO: Implement bb() method.
    }
}
/*
 *接口：
 *      接口是用来规定一个类应该怎么去写，规定一个类要去实现哪些方法
 *      接口可以继承多个
 *      可以用instanceof判断对象是否继承某个接口
 *
 */


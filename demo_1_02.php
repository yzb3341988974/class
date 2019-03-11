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
    public function eat($food){
        echo "{$this->name}正在吃{$food}";
    }
}

$hanMM=new Humanity();
$hanMM->name='韩梅梅';
$hanMM->sex='女';
$hanMM->eat('苹果');
//对象的序列化，对象转化为字符串
/*var_dump(serialize($hanMM));
file_put_contents("hanMM.txt",serialize($hanMM));
*/
$str='O:8:"Humanity":3:{s:4:"name";s:9:"韩梅梅";s:3:"sex";s:3:"女";s:2:"iq";i:10;}';
//反序列化 ,这个类必须先定义过
unserialize($str);

//销毁对象
unset($hanMM);


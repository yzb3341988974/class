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

foreach ($hanMM as $key=>$val){
    var_dump($val);
}


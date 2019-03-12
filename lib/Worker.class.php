<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 3:15
 */
class Worker extends Humanity {
    public function eat($food)
    {
        echo "{$this->name}吃{$food}";
    }

}
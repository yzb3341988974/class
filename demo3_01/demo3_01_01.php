<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/13 0013
 * Time: 下午 4:41
 */
header('Content-type:text\html;charset=utf-8');
/*
 * 位运算
 *      计算机数值用补码方式来表示，处理，存储，运算，减少硬件电路的复杂性
 *
 *
 *      &:按位与,都为1是1
 *      |:按位或，一个为1是1
 *      ^:异或，一个1一个0则为1
 *
 * */
/*
 * 错误处理：
 *          根据报告出来的错误信息，修正我们的代码
 *
 *          在开发阶段：
 *              报告所有的错误
 *              显示所有的错误
 *          在上线阶段：
 *              报告所有的错误
 *              隐藏错误
 *
 * E_ERROR:1
 * E_WARNING:2
 * E_PARSE:4
 * E_NOTICE:8
 *
 * [32767]
 * 设置错误报告级别，是否显示错误
 * 1.php脚本
 *      error_reporting(参数):编译阶段的错误无法处理
 *          参数：这个参数的二进制表现形式是你希望报告哪些级别的错误，那对应位上面为1，否则为0
 *
 *      ini_set('display_errors','Off')//Off不显示 On显示
 *
 *
 * 2.php配置文件里面设置
 *      php.ini中配置error_reporting和display_errors
 *      display_errors：On为显示，Off为不显示，不显示不代表没有报告错误
 *
 * */

var_dump(decbin(12));
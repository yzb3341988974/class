<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 2:18
 */
header('Content-type:text/html;charset=utf-8');
/*自动加载
 *      我们在实际的开发过程中，要准守一些原则
 *              所有的类应该放在不同的文件里，一个文件只放一个类，文件的名称要和里面的类的名称对应起来
 *              有利于维护
 *              比较有利于资源的节约
 *      有没有这样一种方法，当我们需要哪个类时，程序为我们自动去加载这个类
 *      方法一：
 *          只需在使用类之前定义一个函数__autoload
 *          这个函数会在我们使用一个类并且这个类之前没有被定义过的时候自动的去执行
 *          这个函数会接收一个参数，就是我们要使用的类
 *      方法二：
 *          使用SPL函数
 *          SPL：PHP标准库，里面提供了很多的处理典型问题的类，接口，函数
 *              1.spl_autoload_register
 *                  这个函数可以注册一个函数作为当我们需要使用一个类且这个类不存在的时候自动执行
 *                  通过它可以注册多个函数，这些函数不会相互的覆盖，会依次执行
 *              2.spl_autoload_functions
 *              3.spl_autoload_unregister
 *      注意点：自动加载函数对被继承的类，接口，traits都有效果
 *
 *
 *   */

/*function __autoload($className){
    $classPath='lib/'.$className.'.class.php';
    require_once $classPath;
}
$hanMM=new Student('韩梅梅','女');
*/


function classLoad1($className){
    $classPath='lib/'.$className.'.class.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
}
function classLoad2($className){
    $classPath='lib/'.$className.'.class.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
}
spl_autoload_register('classLoad1');
spl_autoload_register('classLoad2');


spl_autoload_unregister('classLoad2');







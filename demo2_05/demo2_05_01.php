<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/12 0012
 * Time: 下午 4:28
 */

header('Content-type:text/html;charset=utf-8');

/*class MYSQL extends mysqli{
        //public $result;
        public function __construct($host, $username, $passwd, $dbname, $port)
        {
            @parent::__construct($host, $username, $passwd, $dbname, $port);
            if($this->connect_errno){
                exit($this->connect_error);
            }
            $this->set_charset("utf-8");

        }
        public function execute($query){
            $this->result=$this->query($query);
            if ($this->errno){
                exit($this->error);
            }
        }
}
$host='localhost';
$user='root';
$password='1998815wetyjkxg';
$database='yzbbbs';
$port=3306;


$db=new MYSQL($host, $user, $password, $database, $port);
$db->execute("select * from yzb_father_module");
var_dump($db->result->fetch_all());*/




/*$host='localhost';
$user='root';
$password='1998815wetyjkxg';
$database='';
$port=3306;
$db=@new mysqli($host,$user,$password,$database,$port);
if ($db->connect_errno){
    echo $db->connect_error;
}
$db->set_charset("utf-8");
$db->select_db('mydb');
$result=$db->query("select * from f");
if ($db->errno){
    echo $db->error;
}
var_dump($result->fetch_all());*/






class MYSQL extends mysqli{
    //public $result;
    public function __construct($host, $username, $passwd, $dbname, $port)
    {
        parent::__construct($host, $username, $passwd, $dbname, $port);
        if ($this->connect_errno){
            exit($this->connect_error);
        }
        $this->set_charset("utf-8");
    }
    public function  execute($query){
        $this->result=$this->query($query);
        if ($this->errno){
            exit($this->error);
        }
    }
}
$host='localhost';
$username='root';
$passwd='1998815wetyjkxg';
$dbname='yzbbbs';
$port=3306;

$db=new MYSQL($host,$username,$passwd,$dbname,$port);
$db->execute("select *from yzb_father_module");
var_dump($db->result->fetch_all());

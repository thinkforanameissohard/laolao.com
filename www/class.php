<?php
include 'flag.php';


error_reporting(0);


class Name{
    private $username = 'nonono';
    private $password = 'yesyes';

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    function __wakeup(){
        $this->username = 'guest'; #在反序列化unserialize时，如果存在，则会调用__wakeup方法
    }

    function __destruct()#在销毁的时候触发
    {
        if ($this->password != 100) 
        {
            echo "</br>NO!!!hacker!!!</br>";
            echo "You name is: ";
            echo $this->username;echo "</br>";
            echo "You password is: ";
            echo $this->password;echo "</br>";
            die();
        }
        if ($this->username === 'admin') 
        {
            global $flag;
            echo $flag;
        }else{
            echo "</br>hello my friend~~</br>sorry i can't give you the flag!";
            die();

            
        }
    }
}

$a=new Name('admin',100);
echo serialize($a);
echo "<br>";
unserialize($a);
echo "<br>";
var_dump($a);
echo "<br>";

?>

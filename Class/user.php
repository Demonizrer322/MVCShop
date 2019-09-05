<?php 
class user {
    public $login;
    public $nick;
    public $password;
    public const Const=5;
    public static $__counter;

    public function __construct ($login, $password, $nick=0){
        $this->login=$login;
        $this->password=$password;
        $this->nick=$nick;
        self::$__counter++;
    }
    public function login(){
        return $this->nick;
    }
   
}
class number {
    public $n;
    public $mass;
    public $nnn;

    public  function __construct($n){
        for($i=0; $i<$n; $i++){
            $this->mass[$i]=rand(0,100);   
        }
    }
    public function Sum(){
            $sum=0;
            $n=count($this->mass);
        for ($i=0; $i<$n; $i++){
            $sum=$this->mass[$i]+$sum;
        }
        return $sum;
    }
    public function SortUp(){
        asort($this->mass);
        return $this->mass;
    }
    public function SortDown(){
        arsort($this->mass);
        return $this->mass;
    }

    public function __tostring(){
        return "hello!";
    }
}
?>
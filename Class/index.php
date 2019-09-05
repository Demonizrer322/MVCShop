<?php

//require_once( 'transport.php');

require_once( 'autoload.php');
spl_autoload_register("myAutoload");



//require_once( 'user.php');
// $user=new user(22,22);
// $user1=new user(223,32);
// $user2=new user(423,52);
// // var_dump ($user);
// // var_dump ($user1);
// // var_dump ($user2);
// // // $user->login='123';
// // // $user->nick='rrrr';
// // // $user->password='dsfdwf';
// // // echo $user->nick;
// // echo user::$__counter;
// // echo "</br>";
// // echo $user->login;
// $number=new number(22);
// var_dump($number->mass);
// echo "</br>";
// echo $number->Sum();
// echo "</br>";
// echo $number;
// echo "</br>";
// var_dump ($number->SortUp());
// echo "</br>";
// var_dump ($number->SortDown());

$trans= new transport(100, 250, 'RED', 'LANOS');
$trans->passenger1=5;
var_dump($trans);
echo "<br>";
$trans->move(150);
echo $trans->curent_speed;
$moto=new motorcicle (100, 250, 'RED', 'BMW',2);
echo "<br>";
var_dump($moto);
echo "<br>";
$moto->move(150);
echo $moto->curent_speed;

$car=new car (100, 250, 'RED', 'BMW',2,4);
echo "<br>";
var_dump($car);
echo "<br>";
$car->move(150);
echo $car->curent_speed;
echo "<br>";

?>
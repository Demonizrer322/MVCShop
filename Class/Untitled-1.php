<?php

require_once( 'abonent.php');
// $abonent1=new abonent("ER", "rtt", "trt", "34234234", "234234234", "ewewerwerwe");
// echo $abonent1;
// echo "</br>";

$arr=new Ary(5);
var_dump ($arr->mass);
echo "</br>";
var_dump ($arr->SortUp());
echo "</br>";
echo  "max: ".$arr->max();
echo "</br>";
echo  "min: ".$arr->min();
echo "</br>";
echo  "seredne znachennia: ".$arr->serZn();
echo "</br>";
var_dump ($arr->push_back(33));
echo "</br>";
var_dump ($arr-> pop_back());
echo "</br>";
var_dump ($arr->push_front(37));
echo "</br>";
var_dump ($arr->pop_front(37));
echo "</br>";
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $array=[];
        array_push($array, $_POST['id']);
        array_push($array, $_POST['user']);
        array_push($array, $_POST['login']);
        array_push($array, $_POST['Password']);
        echo (json_encode($array));
    }
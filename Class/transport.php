<?php
class transport {                       ///'final' zaboronae nasliduvanna
    public $weight, $max_speed, $color, $brsnd, $curent_speed;

    public function __construct($weight, $max_speed, $color, $brand, $curent_speed=0) {
        $this->weight=$weight;
        $this->max_speed=$max_speed;
        $this->color=$color;
        $this->brand=$brand;
        $this->curent_speed=$curent_speed;
    }
    final public function move($speed){      ///'final' zaboronae perenaznachennia v dochirniomu klasi
       $this->curent_speed=$speed;
    }
    public function stop(){
        $this->curent_speed=0;
    }
    public function __set ($name, $value){
        $this->$name=$value;
        echo"</br>";
        echo "Доали властивість";
    }
    public function __get($name){
        
    }
}

class motorcicle extends transport {
    public $passenger;
    public function __construct($weight, $max_speed, $color, $brand, $passenger, $curent_speed=0){
        parent::__construct($weight, $max_speed, $color, $brand, $curent_speed=0);
        $this->passenger=$passenger;
    }
}
class car extends transport {
    public $passenger;
    public $countdoor;
    public function __construct($weight, $max_speed, $color, $brand, $passenger, $countdoor, $curent_speed=0){
        parent::__construct($weight, $max_speed, $color, $brand, $curent_speed=0);
        $this->passenger=$passenger;
        $this->countdoor=$countdoor;
    }
    // public function move($speed){
    //     $this->curent_speed=2*$speed;
    //  }
}

?>
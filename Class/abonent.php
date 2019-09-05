<?php 
// class abonent {

//     public $family, $name, $patronymic, $homePhone, $mobilePhone, $otherdata;

//     public function __construct ($family, $name, $patronymic, $homePhone, $mobilePhone, $otherdata){
//         $this->family=$family;
//         $this->name=$name;
//         $this->patronymic=$patronymic;
//         $this->homePhone=$homePhone;
//         $this->homePhone=$homePhone;
//         $this->mobilePhone=$mobilePhone;
//         $this->otherdata=$otherdata;
        
//     }

//     public function __tostring(){
        
//         return "П.І.Б: ".$this->family." ".$this->name. " ".$this->patronymic."</br>"."Домашній телефон: ".$this->homePhone."</br>"."Мобільний телефон: ".$this->mobilePhone."</br>"."Додаткова інформація: ".$this->otherdata;
//     }

// }

class Ary {
    public $number;
    public $mass;
   

    public  function __construct($number){
        for($i=0; $i<$number; $i++){
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
    
    public function min(){
        return  min($this->mass);
    }

    public function max(){
        return max($this->mass);
    }

    public function serZn(){
        $n=count($this->mass);
        $sum=0;
        for($i=0; $i<$n; $i++){
            $sum=$this->mass[$i]+$sum;   
        }
        $serzn=$sum/$n;
        return $serzn;
    }
    public function push_back($add){
        array_push($this->mass, $add);
        $this->number=count($this->mass);
        return $this->mass;
    }
    public function pop_back(){
        array_pop($this->mass);
        $this->number=count($this->mass);
        return $this->mass;
    }
    public function push_front($add){
        array_unshift($this->mass, $add);
        $this->number=count($this->mass);
        return $this->mass;
    }
    public function pop_front(){
        array_shift($this->mass);
        $this->number=count($this->mass);
        return $this->mass;
    }
    public function insert ($add, $poz){
        array_unshift($this->mass, $add);
        $this->number=count($this->mass);
        return $this->mass;
    }
}
<?php
    namespace models;
    use\dbconfig;

    class baseModel extends dbconfig {
        public function tryMap($data){
            $rules = $this->rules();
            foreach($rules as $key=>$field){
                if(isset($data[$field]))
                {
                    $this->{$field} = $data[$field];
                }
            }
            return TRUE;
        }
    }
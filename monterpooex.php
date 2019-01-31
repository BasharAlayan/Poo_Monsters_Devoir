<?php
	    class Monster
    {
        private $name;
        private $strength;
        private $life;
        private $type;
        function get_name(){
            return $this->name;
        }
        function set_name($name){
            $this->name=$name;
        }
        function get_strength(){
            return $this->strength;
        }
        function set_strength($strength){
            $this->strength=$strength;
        }       
        function get_life(){
            return $this->life;
        }
        function set_life($life){
            $this->life=$life;
        }
        function get_type(){
            return $this->type;
        }
        function set_type($type){
            $this->type=$type;
        }
    }
?>
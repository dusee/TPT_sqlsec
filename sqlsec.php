<?php
    class SS {
        protected $link;
        public function __construct ($link = null) {
            $this->link = $link;
        }
        public function __destruct(){
            unset($this->link);
        }
        public function ss_String($string){
            if(!is_string($string)){
                $string = (string) $string;
            }
            return mysqli_real_escape_string($this->link, $string);
        }
        public function ss_Int($int){
            if(!is_int($int)){
                $int = (int) $int;
            }
            return mysqli_real_escape_string($this->link, $int);
        }
        public function ss_Int_mm($int, $min, $max, $default){
            $default = (int) $default;
            $min = (int) $min;
            $max = (int) $max;
            if(!is_int($int)){
                $int = (int) $int;
            }
            if($int < $min or $int > $max){
                $int = $default;
            }
            return mysqli_real_escape_string($this->link, $int);
        }
        public static function ss_HTML($var){
            return htmlspecialchars($var, ENT_QUOTES);
        }
    }

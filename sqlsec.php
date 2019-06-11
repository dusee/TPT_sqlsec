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
        public function ss_Trans($str){
            function rustotranslit($string) {
                $converter = array(
                    'а' => 'a',   'б' => 'b',   'в' => 'v',
                    'г' => 'g',   'д' => 'd',   'е' => 'e',
                    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                    'и' => 'i',   'й' => 'y',   'к' => 'k',
                    'л' => 'l',   'м' => 'm',   'н' => 'n',
                    'о' => 'o',   'п' => 'p',   'р' => 'r',
                    'с' => 's',   'т' => 't',   'у' => 'u',
                    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

                    'А' => 'A',   'Б' => 'B',   'В' => 'V',
                    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                    'О' => 'O',   'П' => 'P',   'Р' => 'R',
                    'С' => 'S',   'Т' => 'T',   'У' => 'U',
                    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                    'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
                    'ä' => 'a',   'ü' => 'u',  'õ' => 'o',
                    'ö' => 'o'
                );
                return strtr($string, $converter);
            }
            $str = rustotranslit($str);
            $str = trim($str, "-");
            return $str;
        }
    }

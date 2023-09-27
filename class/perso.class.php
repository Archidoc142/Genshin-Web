<?php
    class Personnage{
        private $_img;
        private $_lien;

        public function __construct($param = array()){
            foreach($param as $k => $v){
                $methodName = "set_" . $k; 

                if(method_exists($this, $methodName)) {
                    $this->$methodName($v);
                }
            }
        }

        public function get_img() : string{
            return $this->_img;
        }
        public function get_lien() : string{
            return $this->_lien;
        }

        public function set_img($img){
            $this->_img = $img;
        }
        public function set_lien($lien){
            $this->_lien = $lien;
        }
    }
?>
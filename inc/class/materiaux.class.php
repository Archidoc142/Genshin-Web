<?php
    class Matériaux{
        private $_nom;
        private $_star;
        private $_type;
        private $_jour;
        private $_img;

        public function __construct($param = array()){
            foreach($param as $k => $v){
                $methodName = "set_" . $k; 

                if(method_exists($this, $methodName)) {
                    $this->$methodName($v);
                }
            }
        }

        public function get_nom() : string{
            return $this->_nom;
        }
        public function get_star() : int{
            return $this->_star;
        }
        public function get_type() : string{
            return $this->_type;
        }
        public function get_jour() : int{
            return $this->_jour;
        }
        public function get_img() : string{
            return $this->_img;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }
        public function set_star($star){
            $this->_star = $star;
        }
        public function set_type($type){
            $this->_type = $type;
        }
        public function set_jour($jour){
            $this->_jour = $jour;
        }
        public function set_img($img){
            $this->_img = $img;
        }
    }
?>
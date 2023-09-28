<?php
    class Arme{
        private $_nom;
        private $_star;

        public function __construct($nom, $star){
            $this->_nom = $nom;
            $this->_star = $star;
        }

        public function get_nom() : string{
            return $this->_nom;
        }
        public function get_star() : int{
            return $this->_star;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }
        public function set_star($star){
            $this->_star = $star;
        }
    }
?>
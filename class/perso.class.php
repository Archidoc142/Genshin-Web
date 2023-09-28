<?php
    class Personnage{
        private $_nom;

        public function __construct($nom){
            $this->_nom = $nom;
        }

        public function get_nom() : string{
            return $this->_nom;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }
    }
?>
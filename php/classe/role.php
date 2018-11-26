<?php

    class Role {
        private $id;
        private $libelle;
    

            //constructeur role

        public function __construct($newLibelle)
        {
            $this->libelle = $newLibelle
        }

            // get et set ID

        public function getId()
        {
            return $this->id;
        }

        public function setId() 
        {
            $this->id ) $value;
        }
    }
?>
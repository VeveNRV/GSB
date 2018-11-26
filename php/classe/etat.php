<?php


    class etat {
        private $id;
        private $libelle;


        //constructeur etat

        public function __construct($newLibelle)
        {
            $this->libelle = $newLibelle;
        }


        //get et set id

        public function getID()
        {
            return $this->id;
        }

        public function setId($value) 
        {
            $this->id = $value;
        }

        //get et set libelle

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($value)
        {
            $this->libelle = $value;
        }
    }
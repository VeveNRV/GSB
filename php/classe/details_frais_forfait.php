<?php

    class details_frais_forfait {
        private $id;
        private $quantite;
        private $frais_forfait;
        private $fiche_frais;
    

            //constructeur details_frais_forfait

        public function __construct($newQuantite, $Frais_forfait, $newFiche_frais)
        {
            $this->quantite = $newQuantite;
            $this->frais_forfait = $newFrais_forfait;
            $this->fiche_frais = $newFiche_frais;
        }

            // get et set ID

        public function getId()
        {
            return $this->id;
        }

        public function setId($value) 
        {
            $this->id = $value;
        }

        // get et set quantite

        public function getQuantite()
        {
            return $this->quantite;
        }

        public function setQuantite($value) 
        {
            $this->quantite = $value;
        }

        // get et set frais_forfait

        public function getFrais_forfait()
        {
            return $this->frais_forfait;
        }

        public function setFrais_forfait($value) 
        {
            $this->frais_forfait = $value;
        }

        // get et set fiche_frais

        public function getFiche_frais()
        {
            return $this->fiche_frais;
        }

        public function setFiche_frais($value) 
        {
            $this->fiche_frais = $value;
        }
    }
?>
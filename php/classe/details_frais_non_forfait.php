<?php

    class details_frais_non_forfait {
        private $id;
        private $libelle;
        private $montant;
        private $fiche_frais;
    

            //constructeur details_frais_non_forfait

        public function __construct($newLibelle, $newMontant, $newFiche_frais)
        {
            $this->libelle = $newLibelle;
            $this->montant = $newMontant;
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

        // get et set libelle

        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($value) 
        {
            $this->libelle = $value;
        }

        // get et set montant

        public function getMontant()
        {
            return $this->montant;
        }

        public function setMontant($value) 
        {
            $this->montant = $value;
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
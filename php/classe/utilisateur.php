<?php

    class Utilisateur {
        private $id;
        private $nom;
        private $prenom;
        private $email;
        private $mdp;
        private $role;

        //constructeur utilisateur
        
        public function __construct($newNom, $newPrenom, $newEmail, $newMdp, $newRole) 
        {
            $this->nom = $newNom;
            $this->prenom = $newPrenom;
            $this->email = $newEmail;
            $this->mdp = $newMdp;
            $this->role = $newRole;
        }
    
        //get et set Id
        public function getId() 
        {
            return $this->id;
        }

        public function setId($value) 
        {
            $this->id = $value;
        }

        //get et set nom
        public function getNom() 
        {
            return $this->nom;
        }

        public function setNom($value) 
        {
            $this->nom = $value;
        }

        //get et set prenom
        public function getPrenom() 
        {
            return $this->prenom;
        }

        public function setPrenom($value) 
        {
            $this->prenom = $value;
        }

        //get et set email
        public function getEmail() 
        {
            return $this->email;
        }

        public function setEmail($value) 
        {
            $this->email = $value;
        }

        //get et set mdp
        public function getMdp() 
        {
            return $this->mdp;
        }

        public function setMdp($value) 
        {
            $this->mdp = $value;
        }

        //get et set role
        public function getRole() 
        {
            return $this->role;
        }

        public function setRole($value) 
        {
            $this->role = $value;
        }
    }

?>
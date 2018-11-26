<?php

    class Utilisateur {
        private $id;
        private $role;
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $adressePostal;
        private $codePostal;
        private $email;
        private $mdp;
        private $pseudo;
        private $dateEmbauche;

        //constructeur utilisateur
        
        public function __construct($newRole, $newNom, $newPrenom, $newDateNaissance, $newAdressePostal, $newCodePostal, 
        $newEmail, $newMdp, $newPseudo, $newDateEmbauche) 
        {
            $this->role = $newRole;
            $this->nom = $newNom;
            $this->prenom = $newPrenom;
            $this->dateNaissance = $newDateNaissance;
            $this->adressePostal = $newAdressePostal;
            $this->codePostal = $newCodePostal;
            $this->email = $newEmail;
            $this->mdp = $newMdp;
            $this->pseudo = $newPseudo;
            $this->dateEmbauche = $newDateEmbauche;
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
        public function getRole() 
        {
            return $this->role;
        }

        public function setRole($value) 
        {
            $this->role = $value;
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

        //get et set dateNaissance
        public function getDateNaissance() 
        {
            return $this->dateNaissance;
        }

        public function setDateNaissance($value) {
            $this->dateNaissance = $value;
        }

        //get et set adressePostal
        public function getAdressePostal() 
        {
            return $this->adressePostal;
        }

        public function setAdressePostal($value) 
        {
            $this->adressePostal = $value;
        }

        //get et set codePostal
        public function getcodePostal() 
        {
            return $this->codePostal;
        }

        public function setCodePostal($value)
        {
            $this->codePostal = $value;
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

        //get et set dateEmbauche
        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function setPseudo($value) 
        {
            $this->pseudo = $value;
        }

        //get et set dateEmbauche
        public function getDateEmbauche() 
        {
            return $this->dateEmbauche;
        }

        public function setDateEmauche($value) 
        {
            $this->dateEmbauche = $value;
        }
    }

?>
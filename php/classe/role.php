<?php

    class Role {
        private $id;
        private $libelle;
    

            //constructeur role

        public function __construct($newLibelle)
        {
            $this->libelle = $newLibelle;
        }

            // get et set ID

        public function getId()
        {
            return $this->id;
        }

        public function setId() 
        {
            $this->id = $value;
<<<<<<< HEAD
=======
        }

            // get et set libelle

        public function getLibelle()
        {
            return $this->libele;
        }

        public function setLibelle() 
        {
            $this->libelle = $value;
>>>>>>> f7af23a2c3bd85fb9fc1f6d4ccca31cd22144086
        }
    }
?>
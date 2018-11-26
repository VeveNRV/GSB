<?php

class fiche_frais {

    private $id;
    private $mois;
    private $annee;
    private $etat;
    private $utilisateur;


    //constructeur fiche_frais

    public function __construct($newMois, $newAnnee, $newEtat, $newUtilisateur)
    {
        $this->mois = $newMois;
        $this->annee = $newAnnee;
        $this->etat = $newEtat;
        $this->utilisateur = $newUtilisateur;
    }

    //get et set id

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    //get et set mois

    public function getMois()
    {
        return $this->mois;
    }

    public function setMois($value)
    {
        $this->mois = $value;
    }

    //get et set année

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($value)
    {
        $this->annee = $value;
    }

    //get et set etat

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($value)
    {
        $this->etat = $value;
    }

    //get et set utilisateur

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function setUtilisateur($value)
    {
        $this->utilisateur = $value;
    }

}
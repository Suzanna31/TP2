<?php

class User
{
    //Attributs
    protected $nom;
    protected $prenom;
    protected $motDePasse;
    protected $ID;
    protected $profil;


 //Constructeur
 public function __construct($nom,$prenom,$motDePasse,$ID)
 {
     $this->nom = $nom;
     $this->prenom = $prenom;
     $this->motDePasse = $motDePasse;
     $this->ID = $ID;
 }

 public function getNom(){
    return $this->nom;
 }

 public function getPrenom(){
   return $this->prenom;
}

public function getmotDePasse(){
   return $this->motDePasse;
}

public function getID(){
   return $this->ID;
}
public function getProfil(){
   return $this->profil;
}

}   
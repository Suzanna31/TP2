<?php

class Etudiant extends User
{
    //Attributs
    protected $code;
    protected $profi;


    public function __construct()
    {
        $this->profil = "Etudiant";
    }
    public function getProfil()
    {
        return $this->profil;
    }

    public function setProfil($profil)
    {
        $this->profil = $profil;
    }
}

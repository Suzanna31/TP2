<?php

class Admin extends User
{
    //Attributs
    public $login;

    public function __construct($nom, $prenom, $motDePasse, $login)
    {
        parent::__construct($nom, $prenom, $motDePasse, $login);
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
}

<?php
require_once("./Model/User.php");
require_once("./Model/Etudiant.php");
require_once("./Model/Admin.php");

$Etudiant = new Etudiant();

var_dump($Etudiant);

echo $Etudiant->getID(220093);

$Etudiant = new Etudiant ("POATY", "Suzanna", "Emm@3101.", "220093");

echo $Etudiant -> getPrenom();
echo $Etudiant -> getNom();
echo $Etudiant -> getID();
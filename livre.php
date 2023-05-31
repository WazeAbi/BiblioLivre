<?php 



class livre {
    private $id;
    private $titre;
    private $auteur;




function __construct($id, $titre, $auteur,){
    $this->id = $id;
    $this->titre = $titre;
    $this->auteur = $auteur;
 
}

function getId(){
    return $this->id;
}

function getTitre(){
    return $this->titre;
}
function getAuteur(){
    return $this->auteur;
}






}


?>
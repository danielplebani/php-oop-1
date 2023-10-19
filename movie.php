<?php

include   "./Models/after.php";
include   "./Models/avatar.php";
include   "./Models/matrix.php";

class Movie
{
    //variabili d'istanza
    public $name;
    public $img;
    public $duration;
    public $trama;
    public $genres = [];
    public $genresList;


    //costruttore
    public function __construct($titolo)
    {
        $this->name = $titolo;
    }

    // metodi
    public function getDuration()
    {
        return $this->duration;
    }

    public function addGenre($newGenre)
    {
        array_push($this->genres, $newGenre);
        $this->genresList = implode("," , $this->genres);
    }
}

?>
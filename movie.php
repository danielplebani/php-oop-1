<?php
class Movie
{
    //variabili d'istanza
    public $name;
    public $img;
    public $duration;
    public $genre;
    public $trama;


    //costruttore
    public function __construct($titolo)
    {
        $this->name = $titolo;
    }

    // metodi
    public function addDuration()
    {
        return $this->duration;
    }

    public function addGenre()
    {
        return $this->genre;
    }
}

include   "./Models/after.php";
include   "./Models/avatar.php";
include   "./Models/matrix.php";

?>
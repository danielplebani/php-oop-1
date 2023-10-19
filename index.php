<!-- 
Create un file index.php in cui:

- è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
-->

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

$avatar = new Movie('AVATAR');
$avatar->img = './img/avatar.jpg';
$avatar->duration = 190;
$avatar->genre = 'fantasy';
$avatar->trama = "Former marine Jake Sully has been recruited for a mission to the planet Pandora with the aim of recovering Earth's depleting natural resources. He unexpectedly finds himself wanting to protect the magical world to which he feels strangely attached.";


$matrix = new Movie('MATRIX');
$matrix->img = './img/matrix.avif';
$matrix->duration = 210;
$matrix->genre = 'action';
$matrix->trama = "There are two realities: one is the existence we lead every day, the other is hidden. Neo wants to discover the truth about the Matrix, a computer-generated virtual world created to keep people under control. Morpheus could help him";


$after = new Movie('AFTER');
$after->img = './img/after.jpeg';
$after->duration = 160;
$after->genre = 'romantic';
$after->trama = "Tessa is a model student, engaged for years to a good boy who is very much in love with her. However, when she meets the mysterious Hardin Scott, the young woman begins a relationship with him, and her life changes radically.";

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-info">
    <div class="container text-center py-5">
        <h1 class="text-white">LIST OF MOVIES</h1>

        <div class="card" style="width: 18rem;">
            <img src="<?= $matrix->img ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $matrix->name?></h5>
                <p class="card-text"><?= $matrix->trama?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">GENERE: <?= $matrix->genre?></li>
                <li class="list-group-item">DURATA: <?= $matrix->duration?></li>
            </ul>
        </div>
    </div>

</body>

</html>
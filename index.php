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
include "./movie.php";
include "./db.php";

array_push($movieList, $after, $matrix, $avatar)
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
    <div class="container text-center py-3">
        <h1 class="text-white">LIST OF MOVIES</h1>

        <div class="mt-5 d-flex flex-wrap justify-content-center gap-3">
            <?php foreach ($movieList as $movie) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $movie->img ?>" class="card-img-top" style="height: 11rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie->name ?></h5>
                        <p class="card-text"><?= $movie->trama ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> GENERE: <?= $movie->genresList?></li>
                        <li class="list-group-item">DURATA: <?= $movie->duration ?> minuti</li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</body>

</html>
<?php 
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    
    require_once __DIR__ . '/classes/Movie.php';
    require_once __DIR__ . '/data/db.php';

    var_dump($back_to_the_future, $in_time);
?>
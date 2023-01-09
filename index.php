<?php 
// create un file index.php in cui:
// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    require_once __DIR__ . '/classes/Movie.php';
    
    $back_to_the_future = new Movie(
        'Ritorno al futuro', // Title
        ['Fantasy', 'Comedy', 'Romance', 'Adventure', 'Science fiction'], // Genres
        4 // Vote review
    );

    var_dump($back_to_the_future);
?>
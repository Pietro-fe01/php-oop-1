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

    class Movie {
        private $title;
        private $genre;
        public $publish_year;
        private $review;
        
        function __construct(string $_title, string $_genre, int $_vote){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->setVoting($_vote);
        }

        public function setVoting($vote){
            switch ($vote) {
                case 1:
                    $this->review = "Terrible";
                    break;
                case 2:
                    $this->review = "Very bad";
                    break;
                case 3:
                    $this->review = "Good";
                    break;
                case 4:
                    $this->review = "Very good";
                    break;
                case 5:
                    $this->review = "Awesome";
                    break;
                default: 
                    throw new Exception("ERROR: THE VOTE MUST BE BETWEEN 1 AND 5", 1);
            }
        } 
    }

    $back_to_the_future = new Movie('Ritorno al futuro', 'Fantasy', 4);

    var_dump($back_to_the_future);
?>
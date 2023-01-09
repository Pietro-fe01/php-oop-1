<?php 

    class Movie {
        private $title;
        private $genre;
        public int $publish_year;
        private $review;
        
        function __construct(string $_title, array $_genre, int $_vote){
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
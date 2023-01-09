<?php 

    class Movie {
        private $title;
        private $genre;
        private $publish_year;
        private $review;
        
        function __construct(string $_title, array $_genre, int $_vote){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->setVoting($_vote);
        }

        // Based on review it prints the relevant sentence
        private function setVoting($vote){ 
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

        // Set publish year
        public function setPublishYear(int $_year){
            $this->publish_year = $_year;
        }
        // Get publish year
        public function getPublishYear(){
            return $this->publish_year;
        }
    }
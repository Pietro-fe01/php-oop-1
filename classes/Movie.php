<?php 

    class Movie {
        private $cover_image;
        private $title;
        private $genre;
        private $publish_year;
        private $review;
        private $description = 'No description provided';
        
        public function __construct(string $_cover_image, string $_title, array $_genre, int $_vote){
            $this->cover_image = $_cover_image;
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

        // Get cover image
        public function getFilmCover(){
            return $this->cover_image;
        }

        // Get title
        public function getTitle(){
            return $this->title;
        }

        // Get genres
        public function getGenres(){
            return $this->genre;
        }

        // Set publish year
        public function setPublishYear(int $_year){
            $this->publish_year = $_year;
        }
        // Get publish year
        public function getPublishYear(){
            return $this->publish_year;
        }

        // Get review
        public function getReviews(){
            return $this->review;
        }

        // Set description
        public function setDescription(string $_description){
            $this->description = $_description;
        }
        // Get description
        public function getDescription(){
            return $this->description;
        }
    }
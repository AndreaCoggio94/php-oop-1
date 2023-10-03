<?php

 class Production {

    public $title;
    public $genres;
    public $original_language;
    public $vote;


    // public $in_production ;

    public function __construct(
        // Production
        string $_title,
        Genre $_genres,
        string $_original_language,
        float $_vote,
        ) {
            
            
            $this->setTitle($_title);
            $this->setGenres($_genres);
            $this->setOriginalLanguage($_original_language);   
            $this->setVote($_vote);

        }

        public function setTitle($_title){
            if(empty($_title)){
                return "";
            }
            $this->title = $_title;
        }

        public function setGenres($_genres){
            if(empty($_genres)){
                return "";
            }
            $this->genres = $_genres;
        }

        public function setOriginalLanguage($_original_language){
            if(empty($_original_language)){
                return "";
            }
            $this->original_language = $_original_language;
        }

        public function setVote($vote){
            if(empty($vote)){
                $this->vote = "";
            }
            elseif ($vote <= 2) {
                $this->vote = "low";
            } elseif ($vote <= 4 ) {
                $this->vote = "average";
            } else {
                $this->vote = "masterpiece";
            }
        } 
 }

?>
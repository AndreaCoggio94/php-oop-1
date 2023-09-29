<?php

    class Movie {
        public $title;
        public $genre;
        public $original_language;
        public $year;
        public $vote;

        function __construct(string $_title,
        string $_genre,
        string $_original_language,
        float $_year,
        float $_vote
        ){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->original_language = $_original_language;
            $this->year = $_year;
            $this->setVote($_vote);
        }
        public function setVote($vote){
            if ($vote <= 2) {
                $this->vote = "low";
            } elseif ($vote <= 4 ) {
                $this->vote = "average";
            } else {
                $this->vote = "masterpiece";
            }
        } 

    }
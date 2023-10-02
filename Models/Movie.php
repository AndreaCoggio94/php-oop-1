<?php

    class Movie {
        public $title;
        public $genres;
        public $original_language;
        public $published_year;
        public $vote;
        public $running_time;

        function __construct(string $_title,
        Genre $_genres,
        string $_original_language,
        int $_published_year,
        float $_vote,
        float $_running_time
        ){
            $this->title = $_title;
            $this->genres = $_genres;
            $this->original_language = $_original_language;
            $this->published_year = $_published_year;
            $this->setVote($_vote);
            $this->running_time = $_running_time;
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
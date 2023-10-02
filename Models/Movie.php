<?php

    class Movie {
        public $title;
        public $genres;
        public $original_language;
        public $published_year;
        public $vote;
        public $running_time;

        public function __construct(
        string $_title,
        Genre $_genres,
        string $_original_language,
        int $_published_year,
        float $_vote,
        int $_running_time
        ){
            $this->setTitle($_title);
            $this->setGenres($_genres);
            $this->setOriginalLanguage($_original_language);
            $this->setPublishedYear($_published_year);
            $this->setVote($_vote);
            $this->setRunningTime($_running_time);
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

        public function setPublishedYear($_published_year){
            if(empty($_published_year)){
                return "";
            }
            $this->published_year = $_published_year;
        }

        public function setRunningTime($_running_time){
            if(empty($_running_time)){
                return "";
            }
            $this->running_time = $_running_time;
        }
    }
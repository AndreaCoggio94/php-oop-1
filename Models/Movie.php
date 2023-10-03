<?php

    class Movie extends Production {
        
        public $published_year;
        
        public $running_time;

        

        public function __construct(
        string $_title,
        Genre $_genres,
        string $_original_language,
        int $_published_year,
        float $_vote,
        int $_running_time
        ){
            parent::__construct($_title, $_genres, $_original_language, $_vote) ;
            $this->setPublishedYear($_published_year);
            $this->setRunningTime($_running_time);
            
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
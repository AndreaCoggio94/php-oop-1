<?php

    class Movie {
        public $title;
        public $genre;
        public $original_language;
        public $year;

        function __construct($_title,
        $_genre,
        $_original_language,
        $_year
        ){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->original_language = $_original_language;
            $this->year = $_year;
        }


    }



    
?>
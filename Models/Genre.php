<?php

    class Genre {
        public $genre_primary;

        public $genre_secondary;

        public $genre_tertiary;

        public function __construct(
            string $_genre_primary,
            string $_genre_secondary,
            string $_genre_tertiary
        ) {
            $this->genre_primary = $_genre_primary;
            $this->genre_secondary = $_genre_secondary;
            $this->genre_tertiary= $_genre_tertiary;
        }
    }
?>
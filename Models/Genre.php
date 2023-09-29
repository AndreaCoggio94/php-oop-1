<?php

    class Genre {
        public $genre_primary;

        public function __construct(
            string $_genre_primary
        ) {
            $this->genre_primary = $_genre_primary;
        }
    }
?>
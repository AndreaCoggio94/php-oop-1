<?php

 class Production extends TvSerie {

    // public $in_production ;

    public function __construct(
        // Movie
        string $_title,
        Genre $_genres,
        string $_original_language,
        int $_published_year,
        float $_vote,
        int $_running_time,
        // TvSerie
        int $_aired_from_year,
        int $_aired_to_year ,
        int $_number_of_episodes ,
        int $_number_of_seasons ,
        // Production
        

        ) {
            parent::__construct($_title, $_genres, $_original_language, $_published_year, $_vote, $_running_time, $_aired_from_year, $_aired_to_year, $_number_of_episodes, $_number_of_seasons) ;
            
        }
 }

?>
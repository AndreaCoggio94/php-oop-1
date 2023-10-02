<?php

class TvSerie extends Movie {

    
   public $aired_from_year ;
   public $aired_to_year ;
   public $number_of_episodes ;
   public $number_of_seasons ;


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
        int $_number_of_seasons 

    ){
        parent::__construct($_title, $_genres, $_original_language, $_published_year, $_vote, $_running_time);
        $this->aired_from_year = $_aired_from_year;
        $this->aired_to_year = $_aired_to_year;
        $this->number_of_episodes = $_number_of_episodes;
        $this->number_of_seasons = $_number_of_seasons;


    }

}
?>
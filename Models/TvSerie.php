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
        $this->setAiredFromYear($_aired_from_year);
        $this->setAiredToYear($_aired_to_year);
        $this->setNumberOfEpisodes($_number_of_episodes);
        $this->setNumberOfSeasons($_number_of_seasons);


    }

    public function setAiredFromYear($_aired_from_year){
        if(empty($_aired_from_year)){
            return "";
        }
        $this->aired_from_year = $_aired_from_year;
    }

    public function setAiredToYear($_aired_to_year){
        if(empty($_aired_to_year)){
            return "";
        }
        $this->aired_to_year = $_aired_to_year;
    }

    public function setNumberOfEpisodes($_number_of_episodes){
        if(empty($_number_of_episodes)){
            return "";
        }
        $this->number_of_episodes = $_number_of_episodes;
    }

    public function setNumberOfSeasons($_number_of_seasons){
        if(empty($_number_of_seasons)){
            return "";
        }
        $this->number_of_seasons = $_number_of_seasons;
    }
}
?>
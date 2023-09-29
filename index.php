<?php
    include_once __DIR__ . "/Models/Movie.php" ;

    
    $lotr = new Movie( "LOTR", "Fantasy", "English", "2001", "5") ;
    
    $harry_potter = new Movie("Harry Potter", "Fantasy", "English", "2001", "4");
    

    $film_list = [
        $lotr,
        $harry_potter,
    ];


    foreach ($film_list as $film) {
        echo "<br>";
        foreach ($film as $value){
            echo "$value <br>";
        };
    };

   
?>
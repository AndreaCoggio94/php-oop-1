<?php
    include_once __DIR__ . "/Models/Genre.php" ;
    include_once __DIR__ . "/Models/Movie.php" ;

    

    
    $lotr = new Movie( "LOTR", new Genre("Fantasy", "Adventure", "Action"), "English", "2001", "5") ;
    
    $harry_potter = new Movie("Harry Potter", new Genre("Fantasy", "School", "Adventure"), "English", "2001", "4");
    

    $film_list = [
        $lotr,
        $harry_potter,
    ];

    var_dump($film_list);
    // foreach ($film_list as $film) {
    //     echo "<br>";
    //     foreach ($film as $value){
    //         echo "$value <br>";
    //     };
    // };

   
?>
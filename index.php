<?php
    include_once __DIR__ . "/Models/Genre.php" ;
    include_once __DIR__ . "/Models/Movie.php" ;

    

    
    $lotr = new Movie( "LOTR", new Genre(["Fantasy", "Adventure", "Action"]), "English", "2001", "5") ;
    
    $harry_potter = new Movie("Harry Potter", new Genre(["Fantasy", "School"]), "English", "2001", "4");
    

    $film_list = [
        $lotr,
        $harry_potter,
    ];


    // foreach ($film_list as $film) {
    //     echo "<br>";
    //         echo $film->title . "<br> ";
    //         echo $film->original_language . "<br> ";
    //         echo $film->year . "<br> ";
    //         echo $film->vote . "<br> ";
    //         foreach ($film->genres->genres as $genre){
    //             echo $genre . " <br>" ;
    //             }
    // };

   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Andrea Coggio" />
    <meta name="description" content="new exercise" />
    <!-- title -->
    <title>PHP OOP 1</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <!-- custom style -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <div class="container m-4 d-flex">
        <?php foreach ($film_list as $film) :?>
        <div class="card m-2" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo $film->title ; ?>
                </h5>
                <p class="card-text">
                    <?php echo $film->original_language . "<br> " ; ?>

                    <?php echo $film->year . "<br> " ; ?>

                    <?php echo $film->vote . "<br> " ; ?>
                </p>
                <p>
                    <?php foreach ($film->genres->genres as $genre): ?>
                    <?php echo $genre . " " ; ?>
                    <?php endforeach ?>
                </p>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</body>

</html>
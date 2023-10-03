<?php

    session_start() ;

    include_once __DIR__ . "/Models/Genre.php" ;
    include_once __DIR__ . "/Models/Production.php" ;
    include_once __DIR__ . "/Models/Movie.php" ;
    include_once __DIR__ . "/Models/TvSerie.php" ;
    include __DIR__ . "/data/db.php" ;

    
    $data = $_GET ?? "";
    
    

    $film_list = [
        
    ];

    // $test = new TvSerie("titolo", new Genre(["genere","genere"]), "lingua", "1994", "4.2", "20", "1995", "2000", "30", "2");
    // var_dump($test);
    // if(!empty($data)) {

    //     $new_card = new Movie( $_GET["title"], new Genre([$_GET["genre_primary"], $_GET["genre_secondary"]]), $_GET["original_language"], $_GET["year"], $_GET["vote"]) ;
        
    //     array_push($film_list, $new_card);
        
    // }


    


    foreach ($production_list as $product) {
        // var_dump($product) ;
        if(isset($product["published_year"])) {

            $film_list[] = new Movie ($product["title"], new Genre ($product["genres"]), $product["original_language"], $product["published_year"], $product["vote"], $product["running_time"]) ;
        } else {

            $film_list[] = new TvSerie ($product["title"], new Genre ($product["genres"]), $product["original_language"], $product["vote"], $product["aired_from_year"], $product["aired_to_year"], $product["number_of_episodes"], $product["number_of_seasons"]) ;
            
        }

        // echo "<br>";
        //     echo $product->title . "<br> ";
        //     echo $product->original_language . "<br> ";
        //     echo $product->year . "<br> ";
        //     echo $product->vote . "<br> ";
        //     foreach ($product->genres->genres as $genre){
        //         echo $genre . " <br>" ;
        //         }
    };
    
   
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
    <!-- first draft of form to generate cards by form input -->
    <!-- <div class="container mt-2">
    <form method="GET">
            <h1>Film cards generator</h1>
            <div class="row">

                <input type="text" required placeholder="Insert title of film" class="col form-control col"
                    name="title">
                <input type="number" required placeholder="Insert year of film" class="col form-control col"
                    name="year">
                <input type="text" required placeholder="Insert original language of film" class="col form-control col"
                    name="original_language">
            </div>
            <div class="row">
                <input type="number" min=0 max=5 required placeholder="Insert vote of film" class="col form-control col"
                    name="vote">
                <input type="text" required placeholder="Insert first genre of film" class="col form-control col"
                    name="genre_primary">
                <input type="text" placeholder="Insert second genre of film" class="col form-control col"
                    name="genre_secondary">
            </div>
            <button class="btn btn-outline-primary"> Press to create film card
            </button>
        </form>
    </div> -->

    <!-- Cards container -->

    <div class="container m-4 d-flex">
        <?php foreach ($film_list as $film) :?>
        <?php if(isset($film->published_year)): ?>
        <div class="card m-2" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo $film->title ; ?>
                </h5>
                <p class="card-text">
                    <?php echo $film->original_language . "<br> " ; ?>

                    <?php echo $film->published_year . "<br> " ; ?>

                    <?php echo $film->running_time . "<br> " ; ?>

                    <?php echo $film->vote . "<br> " ; ?>


                </p>


                <p>
                    <?php foreach ($film->genres->genres as $genre): ?>
                    <?php echo $genre . " " ; ?>
                    <?php endforeach ?>
                </p>
            </div>
        </div>
        <?php else : ?>
        <div class="card m-2" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo $film->title ; ?>
                </h5>
                <p class="card-text">
                    <?php echo $film->original_language . "<br> " ; ?>

                    <?php echo $film->aired_from_year . "<br> " ; ?>

                    <?php echo $film->aired_to_year . "<br> " ; ?>

                    <?php echo $film->number_of_episodes . "<br> " ; ?>

                    <?php echo $film->number_of_seasons . "<br> " ; ?>

                    <?php echo $film->vote . "<br> " ; ?>


                </p>


                <p>
                    <?php foreach ($film->genres->genres as $genre): ?>
                    <?php echo $genre . " " ; ?>
                    <?php endforeach ?>
                </p>
            </div>
        </div>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</body>

</html>
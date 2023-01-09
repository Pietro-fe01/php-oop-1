<?php 
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
    
    require_once __DIR__ . '/classes/Movie.php';
    require_once __DIR__ . '/data/db.php';

    // var_dump($films);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP - 1</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h1>PHP OOP FILMS</h1>
        </header>

        <main>
            <section class="films-container container">
                <?php foreach ($films as $key => $film) {?>
                    <div class="film">
                        <div class="film__image">
                            <img src="<?php echo $film->getFilmCover() ?>" alt="image">
                        </div>
                        <div class="film__info">
                            <h2 class="film__title"><?php echo $film->getTitle(); ?></h2>
                            <p class="film__genres">
                                <strong>Genres: </strong>
                                <?php foreach ($film->getGenres() as $i => $genre) {
                                    if(count($film->getGenres()) - 1 == $i){
                                        echo $genre . '.';
                                    } else {
                                        echo $genre . ', ';
                                    }
                                } ?>
                            </p>
                            <small class="film__year">
                                <strong>Publish date: </strong>
                                <?php echo ($film->getPublishYear()) ? $film->getPublishYear() : "Any date provided" ?>
                            </small>
                            <div class="film__review">
                                <strong>Reviews: </strong>
                                <?php echo $film->getReviews(); ?>
                            </div>
                            <p class="film__description">
                                <strong>Description: </strong>
                                <?php echo $film->getDescription(); ?>
                            </p>
                        </div>
                    </div>
                <?php } ?> 
            </section>
        </main>

        <footer>
            <h4>Copyrights</h4>
        </footer>
    </body>
</html>
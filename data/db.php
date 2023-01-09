<?php 
    // All objects deriving from the Movie class will go here
    $back_to_the_future = new Movie(
        'https://m.media-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
        'Back to the Future', // Title
        ['Fantasy', 'Comedy', 'Romance', 'Adventure', 'Science fiction'], // Genres
        4 // Vote review
    );
    $back_to_the_future->setDescription('Marty McFly, a 17 year old high school student gets lost in 1955 by an accident, 30 years back in time. With the help of his friend Dr. Emmet Brown, he is desperately trying to find his way back to the future in the year 1985. It becomes a battle against the clock.');

    $in_time = new Movie(
        'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTallr69g7uXzNcxB0dq0-KQ9YkAK_4FpCHdK8yMu9nnOiVDeCD',
        'In Time', // Title
        ['Action', 'Drama', 'Crime fiction', 'Thriller', 'Science fiction', 'Melodrama'], // Genres
        5 // Vote review
    );
    $in_time->setPublishYear(2011);

    $black_adams = new Movie(
        'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNSOjcSmrXYIZ517jTKmCDxBwIJU4_ojFweUDLI1Dssn2UfTsx',
        'Black Adam', // Title
        ['Action', 'fantasy', 'Superhero', 'Thriller', 'Science fiction', 'Drama', 'Adventure'], // Genres
        2 // Vote review
    );
    $black_adams->setPublishYear(2022);

    // Every film is pushed inside the array 'films'
    $films = [
        $back_to_the_future,
        $in_time,
        $black_adams
    ];
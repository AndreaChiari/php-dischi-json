<?php
$discs = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'year' => 1972,
        'poster' => 'https://m.media-amazon.com/images/I/71SxPkY9fKL._AC_SL1300_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'And justice for all',
        'author' => 'Metallica',
        'year' => 1988,
        'poster' => 'https://m.media-amazon.com/images/I/81pchxSIApL._AC_SL1200_.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'Hard wired',
        'author' => 'Dave Weckl',
        'year' => 1994,
        'poster' => 'https://m.media-amazon.com/images/I/611TBSi2y8L._AC_SL1200_.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => 1987,
        'poster' => 'https://m.media-amazon.com/images/I/51-c9KBefDL._AC_.jpg',
        'genre' => 'Pop'
    ],
];

//importo il file da leggere
$url = __DIR__ . '/data.json';

//leggo il contenuto del file
$json_data = file_get_contents($url);

header('Content-Type: application/json');
echo json_encode($discs);

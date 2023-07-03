<?php 
    $date_1 = rand(1,30). " - ".rand(1,12). " - ".rand(2010,2022);
    $date_2 = rand(1,30). " - ".rand(1,12). " - ".rand(2010,2022); 
    $date_3 = rand(1,30). " - ".rand(1,12). " - ".rand(2010,2022); 
    $posts = [
         $date_1 => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ]
        ],

        $date_2 => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],

        $date_3 => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ]
    ];
        var_dump($posts)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 3</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
    $matches = [
        [
            'team'  => 'Atlanta Hawks'. " - ".'Boston Celtics',
            'score' => rand(1,100). " - ".rand(1,100),
        ],
        [
            'team' => 'Chicago Bulls'. " - ".'Orlando Magic',
            'score' => rand(1,100). " - ".rand(1,100),
        ],
        [
            'team' => 'Detroit Pistons'." - ".'Los Angeles Clippers',
            'score' => rand(1,100). " - ".rand(1,100),
        ],
        [
            'team' => 'San Antonio Spurs'. " - ".'Phoenix Suns',
            'score' => rand(1,100). " - ".rand(1,100),
        ],
        [
            'team' => 'Denver Nuggets'. " - ".'Cleveland Cavaliers',
            'score' => rand(1,100). " - ".rand(1,100),
        ],
        [
            'team' => 'Miami Heat'. " - ".'Los Angeles Lakers',
            'score' => rand(1,100). " - ".rand(1,100),
        ]
    ];


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 1</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col mx-5">
                    <h2>NBA Day 24</h2>
                    <ul>
                        <?php foreach($matches as $match){ ?>  
                            <li><?php echo $match['team']. " | " .$match['score']?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
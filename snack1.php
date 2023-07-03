<?php 
    $matches = [
        [
            'team_1'        => 'Atlanta Hawks',
            'team_2'        => 'Boston Celtics',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
        ],
        [
            'team_1'        => 'Chicago Bulls',
            'team_2'        => 'Orlando Magic',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
        ],
        [
            'team_1'        => 'Detroit Pistons',
            'team_2'        => 'Los Angeles Clippers',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
        ],
        [
            'team_1'        => 'San Antonio Spurs',
            'team_2'        => 'Phoenix Suns',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
        ],
        [
            'team_1'        => 'Denver Nuggets',
            'team_2'        => 'Cleveland Cavaliers',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
        ],
        [
            'team_1'        => 'Miami Heat',
            'team_2'        => 'Los Angeles Lakers',
            'score_team_1'  => rand(1,100),
            'score_team_2'  => rand(1,100)
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
                <div class="col">
                    <ul>
                        <?php foreach($matches as $match){
                                echo $match['team_1']. " - " .$match['team_2']. " | " .$match['score_team_1']. " - " .$match['score_team_2'];
                            };
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
    $array_number = [];
     while(count($array_number) < 15){
        $rand_number = rand(1,50);
        
        if(!in_array($rand_number, $array_number)){
            $array_number [] = $rand_number;
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 4</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col mx-5">
                    <h2>Number generator</h2>
                    <ul>
                        <?php foreach($array_number as $number) {?>
                            <li>
                                <?php echo $number ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
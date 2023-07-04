<?php 
    $flag_name = false;
    $flag_email = false;
    $flag_age = false;
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])){
        if(strlen($_GET['nome']) >= '3'){
            $flag_name = true;
        }
        else{
            echo 'Inserire almeno 3 caratteri';
        }

        if(str_contains($_GET['email'], '@') && str_contains($_GET['email'], '.')){
            $flag_email = true;
        }
        else{
            echo "Inserire almeno uno dei seguenti caratteri : '.', '@'";
        }

        if(is_numeric($_GET['eta'])){
            $flag_age = true;
        }
        else{
            echo 'Inserire un numero';
        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 2</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row d-flex justify content-center">
                <div class="col-8">
                    <h2>Compila questi campi per accedere</h2>
                    <form class="row g-3" action="snack2.php" method="GET">
                        <div class="col-auto">
                            <input type="text" name="nome" class="form-control" placeholder="Inserisci il tuo nome">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="email" class="form-control" placeholder="Inserisci la tua e-mail">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="eta" class="form-control" placeholder="Inserisci la tua età">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success mb-3">Accedi</button>
                        </div>
                    </form>

                    <div>
                        <?php if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])){ ?>
                            <h2>
                                <?php if($flag_name && $flag_email && $flag_age){
                                    echo 'Accesso eseguito';
                                }
                                else{
                                    echo 'Accesso negato';
                                }?>
                            </h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
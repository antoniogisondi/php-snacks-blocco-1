<?php 
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])){
        $name = $_GET['nome'];
        $email = $_GET['email'];
        $eta = $_GET['eta'];
    }

    if(strlen($name) >= '3'){
        if(str_contains($email, '@') && str_contains( $email, '.')){
            if(is_numeric($eta)){
                echo 'Accesso riuscito';
            }
            else{
                echo 'Inserire un numero';
            }
        }
        else{
            echo "Inserire almeno uno dei seguenti caratteri : '.', '@'";
        }
    }
    else{
        echo 'Inserire almeno 3 caratteri';
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
                </div>
            </div>
        </div>
    </body>
</html>
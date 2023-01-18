<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo1</title>
    </head>
    <body>
        <div>
            <?php
                $aléatoire = rand (0,100);
                echo"le nombre aléatoire est .$aléatoire."; 
                $aléatoire = rand (0,100);
                if ($aléatoire %2 == 0){
                    echo"<p style='background-color:red;'>votre nombre $aléatoire est pair</p>";
                }  
                else{
                    echo"<p style='background-color:blue;'>votres nombre $aléatoire est impair";
                }
            ?>
        </div>
    </body>
</html>

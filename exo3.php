<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
        $array = [
            0 => array("nom" => "briaux","prenom" => "Simon","MotDePasse" => "1234"),
            1 => array("nom" => "Senepart","prenom" => "Mathias","MotDePasse" => "0000"),
            2 => array("nom" => "Leprere","prenom" => "Alexandre","MotDePasse" => "9852"),
        ];
        echo "<table border='1'>";
        for($i=0;$i<3;$i++){
            echo "<tr> <td>".$array[$i]['nom']." ".$array[$i]['prenom']." ".$array[$i]['MotDePasse']."</td> </tr>";
        }
        echo "</table>"
        ?>  
        
    </div>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css" />
    <title>exo2</title>
</head>
<body>
    <div>
        <?php
        $array = [
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 4,
            4 => 5,
        ];
        echo "<table border='1'><tr>";

        for($i=0;$i<5;$i++){
            echo "<th>".$array[$i]."</th>";
        }
        echo "</tr></table>";
        ?>   
    </div>
    <div class="droite"> 
        <?php
        $array2 = [
            0 => "Nom",
            1 => "Prenom",
            2 => "MDP",
        ];
        $array3 = [
            0 => "Briaux",
            1 => "Simon",
            2 => "1234",
        ];


        echo "<table border='1'><tr>";
        for($i=0;$i<3;$i++){
            echo "<th>".$array2[$i]."</th>";
            echo "<tr><th>".$array3[$i]."</th></tr>";
        }
        echo "</tr></table>";
        ?>
    </div>

<table>
<tr>


</tr>
</table>

</body>
</html>
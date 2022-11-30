<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exo2.css" />
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
        $array = [
            0 => "Nom",
            1 => "Prenom",
            2 => "MDP",
        ];
        echo "<table border='1'><tr>";

        for($i=0;$i<3;$i++){
            echo "<th>".$array[$i]."</th>";
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
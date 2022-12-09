<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css" />
    <title>exo5php</title>
</head>
<body>
    <form action="" method="get">
    <div>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
    <input type="submit" value="Subscribe!">
  </div>
  <div class="rouge">
  <?php
echo 'Salut ' . htmlspecialchars($_GET["name"]) . '!';
?>
</div>
</body>
</html>
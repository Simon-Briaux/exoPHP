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
        <label for="nimp">Enter nimporte quoi :  </label>
        <input type="text" name="nimp" id="nimp" required>
    </div>
    <div>
    <input type="submit" value="Subscribe!">
  </div>
  <div class="violet">
  <?php
echo ' ' . htmlspecialchars($_GET["nimp"]) . '!';
?>
</div>
</body>
</html>
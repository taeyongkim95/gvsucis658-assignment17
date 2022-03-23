<?php
  if (!isset($_COOKIE["displayMode"]) || $_COOKIE["displayMode"] == "light") {
    $backGroundColor = "#eee";
    $textColor = "#000";
  } else {
    $backGroundColor = "#333";
    $textColor = "#fff";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Assignment 17 - Preferences</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: <?php echo $backGroundColor;?>;
      color: <?php echo $textColor;?>;
    }
  </style>
</head>

<body>
  <header>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="preferences.php">Preferences</a>
  </header>

</body>

</html>
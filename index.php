<?php
  session_start();

  $_SESSION['loggedIn'] = true;
  
  $displayMode = "light";
  $displayModeCookieName = "Display Mode";
  setcookie($displayModeCookieName, $displayMode, time() + (86400 * 3), "/");

  if (!isset($_COOKIE[$displayMode]) || $_COOKIE[$displayMode] == "light") {
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
  <title>Assignment 17 - Home</title>
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
    <a href="login.php">
      <?php if ($_SESSION['loggedIn'] == false ) {
        echo "Login";
      } else {
        echo "Logout";
      }?>
    </a>
    <?php if ($_SESSION['loggedIn'] == true) { ?>
      <a href="preferences.php">Preferences</a>
    <?php } else { } ?>
  </header>

</body>

</html>
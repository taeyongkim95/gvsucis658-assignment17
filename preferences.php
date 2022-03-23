<?php
  if (isset($_POST['display-mode']) && isset($_POST['display-mode'])) {
    if ($_POST['display-mode'] == "light") {
      $_COOKIE["displayMode"] == "light"
    } else {
      $_COOKIE["displayMode"] == "dark"
    }
  }

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
      
    <?php if ($_SESSION['loggedIn'] == false ) { ?>   
      <a href="login.php">Login</a>
    <?php } else { ?>
      <form action="login.php" method="POST">
        <input type="hidden" name="logout" />
        <input type="submit" value="Logout"/>
      </form>
    <?php } ?>

    <?php if ($_SESSION['loggedIn'] == true) { 
      echo "<a href=\"preferences.php\">Preferences</a>";
    } else { } ?>
  </header>

  <?php if ($_SESSION['loggedIn'] == false) { ?>
    <h1>You must be logged in to access this content</h1>
  <?php } else { ?>
    <form action="preferences.php" method="POST">
      <select name="display-mode">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
        <input type="submit" value="Set" />
      </select>
    </form>
  <?php } ?>

</body>

</html>
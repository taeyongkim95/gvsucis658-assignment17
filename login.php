<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Assignment 17 - Login</title>
  <link rel="stylesheet" href="style.css">
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
    <?php if ($_SESSION['loggedIn'] == true) { 
      echo "<a href=\"preferences.php\">Preferences</a>";
    } else { } ?>
  </header>
</body>

</html>
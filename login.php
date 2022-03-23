<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Assignment 17 - Login</title>
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
    <?php if ($_SESSION['loggedIn'] == true) { 
      echo "<a href=\"preferences.php\">Preferences</a>";
    } else { } ?>
  </header>

  <?php if ($_SESSION['loggedIn'] == false) { ?>
    <form>
      <input type="text" name="username" placeholder="User Name"/>
      <input type="text" name="password" placeholder="Password"/>
      <input type="submit" />
    </form>
  <?php } else { ?>
    
  <?php } ?>
</body>

</html>
<?php
  session_start();

  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == "CIS658" && $_POST['password'] == "WebArchitectures") {
      $correctLogin = true;
      $_SESSION['loggedIn'] = true;
    } else {
      $correctLogin = false;
    }
  }

  if (isset($_POST['logout']) && isset($_POST['logout'])) {
    $_SESSION['loggedIn'] = false;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Assignment 17 - Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<?php if (!isset($_COOKIE["displayMode"]) || $_COOKIE["displayMode"] == "light") {
    echo "<body class=\"light-mode\">";
  } else {
    echo "<body class=\"dark-mode\">";
}?>
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

  <?php if ( $correctLogin == false ) {
    echo "<h1>Wrong login information entered</h1>";
  } else {
    echo "<h1>You are currently Logged in</h1>";
  }?>

  <?php if ($_SESSION['loggedIn'] == false) { ?>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="User Name"/>
      <input type="text" name="password" placeholder="Password"/>
      <input type="submit" />
    </form>
  <?php } else { ?>
  <?php } ?>
</body>

</html>
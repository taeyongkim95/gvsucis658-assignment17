<?php
  session_start();

  if (isset($_POST['display'])) {
    if ($_POST['display'] == "light") {
      setcookie("displayMode", "light", time() + (86400 * 3), "/");
      header("Refresh:0"); 
    } else {
      setcookie("displayMode", "dark", time() + (86400 * 3), "/");
      header("Refresh:0"); 
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Assignment 17 - Preferences</title>
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

  <?php if ($_SESSION['loggedIn'] == false) { ?>
    <h1>You must be logged in to access this content</h1>
  <?php } else { ?>
    <form action="preferences.php" method="POST">
      <select name="display">
        <option value="light">Light</option>
        <option value="dark">Dark</option>  
      </select>
      <input type="submit" value="Set" />
    </form>
  <?php } ?>

</body>

</html>
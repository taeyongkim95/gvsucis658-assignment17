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
    <?php if ($_SESSION['loggedIn'] == true) { 
      echo "<a href=\"preferences.php\">Preferences</a>";
    } else { } ?>
  </header>

  <h1>Home</h1>

  <div class="blog-container">
    <article>
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>

    <article>
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>

    <article>
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
  </div>

</body>

</html>
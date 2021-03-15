<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Php Project 01</title>
    <link href="'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
    <div class="wrapper">
    <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="discover.php">About Us</a></li>
    <li><a href="blog.php">Blogs</a></li>
    <?php
    if (isset($_SESSION["useruid"])) {
    echo "<li><a href='profile.php'>Profile get</a></li>";
    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
    }
    else {
        echo "<li><a href='signup.php'>Sign up</a></li>";
    echo "<li><a href='login.php'>Log in</a></li>";
    }
    ?>
    </ul>
    </div>
    </nav>
    
    <div class="wrapper">
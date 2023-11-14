<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Contact</title>
</head>
<body>
    <nav>
        <input type="checkbox"> 
        
      <div class="burger-wrapper"><img src="../images/burger.png" class="burger-img"></div>
        <h2 class="bar-title" >Contact</h2>
        <div class="welcome-wrapper">
                <h2 class="welcome">Welcome <?php echo $_SESSION["username"];?>!</h2>
                <a class="logout" href="logout.php">Logout</a>
            </div>
        <hr>
        <ul id="drop">
            <li>
                <a href="homepage.php">Home</a>
            </li>
            <li>
                <a href="cv.php">CV</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
        </ul></nav>
        <p class="contact">
            <span class="bold" > Email: </span>
            <a href="mailto:shediakhassan@gmail.com" class="contact">shediakhassan@gmail.com</a>
        </p>
        <p class="contact">
            <span class="bold">Phone: </span><a href="tel:70829124" class="contact">+961 70829124</a>
        </p>
        <p class="contact">
            <span class="bold">Linkedin: </span><a href="https://www.linkedin.com/in/hassan-shediak" target="_blank" class="contact">linkedin.com/in/hassan-shediak</a>
        </p>    
    
</body>
</html>

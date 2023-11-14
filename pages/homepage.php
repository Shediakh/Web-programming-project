<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Homepage</title>
</head>
<body>
    <!--Nav bar-->

    <nav>
        <input type="checkbox"> 
        
      <div class="burger-wrapper"><img src="../images/burger.png" class="burger-img"></div>
        <h2 class="bar-title" >Home page</h2>
        <hr>
        <ul id="drop">
            <li>
                <a href="cv.php">CV</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    
    </nav>

    
    <div class="home-image-wrapper"><a href="cv.php"><img src="../images/cv.jpg"  class="home-image"></a></div>
    <div class="home-image-wrapper"><a href="gallery.php"><img src="../images/gallery.jpg" class="home-image"></a></div>
    <div class="home-image-wrapper"><a href="contact.php"><img src="../images/contact.jpg" class="home-image"></a></div>
    
    
</body>
</html>

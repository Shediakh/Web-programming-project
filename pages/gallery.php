<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
    <head>
        <title>Gallery web page</title>
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
    <body>
        <nav>
            <input type="checkbox"> 
          <div class="burger-wrapper"><img src="../images/burger.png" class="burger-img"></div>
            <h2 class="bar-title">Gallery</h2>
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
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        
        <div class="gallery">
        <?php
            $file = file_get_contents("../txt/image-list.txt");
            $list = explode(",",$file);
            for($i = 0; $i < sizeof($list); $i++) {
                echo '<a href="#' . $list[$i] . '"><img class ="image" src="../images/' . $list[$i] . '"></a>';
                echo '<div id="' . $list[$i] . '" class="overlay"><div class="popup"><h2> &nbsp;</h2><a class="close" href="#">×</a><div class="content"><img class="image-zoom" src="../images/' . $list[$i] . '"></div></div></div>';
            }
            ?>

        </div>

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
            <hr>
            <ul id="drop">
                <li>
                    <a href="homepage.html">Home</a>
                </li>
                <li>
                    <a href="cv.html">CV</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
        
        <div class="gallery">
        <?php
            $file = file_get_contents("../txt/image-list.txt");
            $list = explode(",",$file);
            for($i = 0; $i < sizeof($list); $i++) {
                echo '<a href="#' . $list[$i] . '"><img class ="image" src="../images/' . $list[$i] . '.jpeg"></a>';
                echo '<div id="' . $list[$i] . '" class="overlay"><div class="popup"><h2> &nbsp;</h2><a class="close" href="#">×</a><div class="content"><img class="image-zoom" src="../images/' . $list[$i] . '.jpeg"></div></div></div>';
            }
            ?>

        </div>
<!--         
        <div id="image1" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 1.jpeg">
                </div>
            </div>
        </div>

        <div id="image2" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 2.jpeg">
                </div>
            </div>
        </div>

        <div id="image3" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 3.jpeg">
                </div>
            </div>
        </div>

        <div id="image4" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 4.jpeg">
                </div>
            </div>
        </div>

        <div id="image5" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 5.jpeg">
                </div>
            </div>
        </div>

        <div id="image6" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 6.jpeg">
                </div>
            </div>
        </div>

        <div id="image7" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 7.jpeg">
                </div>
            </div>
        </div>

        <div id="image8" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 8.jpeg">
                </div>
            </div>
        </div>

        <div id="image9" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 9.jpeg">
                </div>
            </div>
        </div>

        <div id="image10" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 10.jpeg">
                </div>
            </div>
        </div>

        <div id="image11" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 11.jpeg">
                </div>
            </div>
        </div>

        <div id="image12" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 12.jpeg">
                </div>
            </div>
        </div>

        <div id="image13" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 13.jpeg">
                </div>
            </div>
        </div>

        <div id="image14" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 14.jpeg">
                </div>
            </div>
        </div>

        <div id="image15" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 15.jpeg">
                </div>
            </div>
        </div>
        <div id="image16" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 16.jpeg">
                </div>
            </div>
        </div>
        <div id="image17" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 17.jpeg">
                </div>
            </div>
        </div>
        <div id="image18" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 18.jpeg">
                </div>
            </div>
        </div>
        <div id="image19" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 19.jpeg">
                </div>
            </div>
        </div>
        <div id="image20" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 20.jpeg">
                </div>
            </div>
        </div>
        <div id="image21" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 21.jpeg">
                </div>
            </div>
        </div>
        <div id="image22" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2> 
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 22.jpeg">
                </div>
            </div>
        </div>
        <div id="image23" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 23.jpeg">
                </div>
            </div>
        </div>
        <div id="image24" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 24.jpeg">
                </div>
            </div>
        </div>
        <div id="image25" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 25.jpeg">
                </div>
            </div>
        </div>
        <div id="image26" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 26.jpeg">
                </div>
            </div>
        </div>
        <div id="image27" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 27.jpeg">
                </div>
            </div>
        </div>
        <div id="image28" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 28.jpeg">
                </div>
            </div>
        </div>
        <div id="image29" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 29.jpeg">
                </div>
            </div>
        </div>
        <div id="image30" class="overlay">
            <div class="popup">
                <h2> &nbsp;</h2>
                <a class="close" href="#">×</a>
                <div class="content">
                    <img class="image-zoom" src="../images/image 30.jpeg">
                </div>
            </div>
        </div>
       
    </body>
</html> -->
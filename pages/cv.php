<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
<head>
    <link rel="stylesheet" href="../css/cvstyle.css">
    <title>Hassan El Shediak - CV</title>
</head>
<body>
    <nav>
        <input type="checkbox"> 
        
      <div class="burger-wrapper"><img src="../images/burger.png" class="burger-img"></div>
        <h2 class="bar-title" >CV</h2>
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
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="left-panel">
            <h1>Hassan El Shediak</h1>
            <p class="top">Software Engineer wannabe</p>
            <div class="heading">
                <h2>Contact info</h2>
            </div>
            <strong>Phone</strong>
            <p><a href="tel:0096170829124">+961 70829124</a></p>
            <strong>Email</strong>
            <p><a href="mailto:shediakhassan@gmail.com">shediakhassan@gmail.com</a></p>
            <strong>LinkedIn</strong>
            <p><a href="https://linkedin.com/in/hassan-shediak" target="_blank">linkedin.com/in/hassan-shediak</a></p>
            <div class="heading">
                <h2>Skills</h2>
            </div>
            <p>Java</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:90%;">
                </div>
            </div>
            <p>Python</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:85%;">
                </div>
            </div>
            <p>HTML</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:65%;">
                </div>
            </div>
            <p>CSS</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:65%;">
                </div>
            </div>
            <p>JavaScript</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:60%;">
                </div>
            </div>
            <p>Vue.js</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:70%;">
                </div>
            </div>
            <p>C</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:80%;">
                </div>
            </div>
            <p>C#</p>
            <div class="outer-bar" style="margin-bottom:30px">
                <div class="inner-bar" style="width:65%;">
                </div>
            </div>
            <div class="heading">
                <h2>Languages</h2>
            </div>
            <p>English</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:90%;">
                </div>
            </div>
            <p>Arabic</p>
            <div class="outer-bar">
                <div class="inner-bar" style="width:90%;">
                </div>
            </div>
        </div>

        <div class="right-panel">
            <hr>
            <h1>About</h1>
            <hr>
            <p>As a computer science student with a proven track record of high academic performance, I am passionate about programming and dedicated to continuously expanding my knowledge. I pride myself on being a quick learner, able to grasp new programming concepts and apply them effectively.</p>
            <br>
            <hr>
            <h1>Education</h1>
            <hr>
            <div class="left-panel right">
                <p>Jan. 2022 - Dec. 2024</p>
                <br><br><br><br><br><br><br>
                <p>Sep. 2020 - Jun. 2021</p>
                <br><br><br><br><br>
                <p>Sep. 2020 - Jun. 2021</p>
            </div>
            <div class="right-panel right">
                <h2>Bachelor of Science in Computer Science</h2>
                <p class="institute">Lebanese American University (LAU) - Beirut, Lebanon</p>
                <p>CGPA: 3.92 / 4.0</p>
                <p>Awarded the LAU Honors Scholarship</p>
                <h2>General Certificate of Education (GCE)</h2>
                <p class="institute">Al-Amal Indian School of Kuwait - Salmiya, Kuwait</p>
                <p>Final grades: A, A, A, A</p>
                <h2>International General Certificate of Secondary Education (IGCSE)</h2>
                <p class="institute">Oxford Academy of Kuwait - Salwa, Kuwait</p>
                <p>Final grades: A*, A*, A, A, A, B, B</p>
            </div>

            <hr>
            <h1>Experience</h1>
            <hr>
            <div class="left-panel right experience">
                <p>Jul. 2023 - Aug. 2023</p>
                <br><br><br><br><br><br><br><br>
                <p>Oct. 2022 - Present</p>
                <br><br><br><br><br><br><br><br>
                <p>Sep. 2020 - Jun. 2021</p>
            </div>
            <div class="right-panel right experience">
                <h2>Software Engineer Intern</h2>
                <p class="institute">Cardinal Health</p>
                <ul>
                    <li>
                        Developed unit tests for Vue.js 2.0 components using jest. 
                    </li>
                    <li style="margin-bottom:45px">  
                        Shadowed experienced software engineers in an agile environment during their daily scrums.
                    </li>
                    
                </ul>
                <h2>Web Assistant</h2>
                <p class="institute">Lebanese American University</p>
                <ul>
                    <li>
                        Worked alongside experienced web developers to carry out web edits on various LAU sites.
                    </li>
                    <li>
                        Developed a Java tool to filter bounced-back and invalid emails from an email list.
                    </li>
                    <li>
                        Created the editor's guide for 5+ major LAU websites to be used by other web editors.
                    </li>
                </ul>
                <h2>Computer Science Tutor</h2>
                <p class="institute">YMY Tutoring Center</p>
                <ul>
                    <li>
                        Assisted 30+ students with programming assignements and projects.
                    </li>
                    <li>
                        Demonstrated strong communication and interpersonal skills.
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>

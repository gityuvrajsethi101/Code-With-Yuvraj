<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <!-- Navbar Starts -->
    <?php include './includes/header.php' ?>
    <!-- Navbar Ends -->
    <!-- Hero Section Start-->
    <section class="home" id="home">
        <div id="particles-js"></div>
        <div class="content">
            <h2>Learn To Become<br /><span>Software Engineer</span></h2>
            <p>I can help you learn <br />And Grasp A Placement</p>
            <p style="margin:0; padding:0;">Hello<span> yuvraj <?php echo $_SESSION['name'] ?> </span></p>
            <div class="socials">
                <ul class="social-icons">
                    <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/uvsethi90/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="github" aria-label="GitHub" href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a class="telegram" aria-label="Telegram" href="https://t.me/sethi_11" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/yuvrajsethi_19/"><i class="fab fa-instagram" target="_blank"></i></a></li>
                    <li><a class="dev" aria-label="Dev" href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="image">
            <img draggable="false" class="tilt" src="./images/hero.png" />
        </div>
    </section>
    <!-- Hero Section End  -->
    <!-- About us section starts here -->
    <section class="about" id="about">
        <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/hero2.png" draggable="false" class="tilt" alt="Hero" />
            </div>
            <div class="content">
                <h3>Hello, I'm Yuvraj</h3>
                <span class="tag">Full Stack Web Developer</span>
                <p>Are you feeling stuck or overwhelmed in your coding journey?
                    Don't worry, I've got your back! Together, we'll work to level up your
                    skills, increase your earning potential, and build a brighter future.</p>
                <p>I know learning to code can be tough. So I've carefully organized my
                    courses into simple, bite-sized pieces to help you progress smoothly,
                    one step at a time. </p>
                <p>I believe the best way to learn is by actually doing. That's why my
                    courses teach you the essential theory and provide practical exercises.
                    You'll be able to practice everything you learn and apply it to real-life
                    situations.</p>

                <div class="profilebtn" style="margin-bottom:0px;">
                    <a href="https://www.linkedin.com/in/uvsethi90/" target="_blank" class="btn"><span>View my profile</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
    </section>
    <!-- All Major Javascript CDNS Starts -->
    <!-- Scroll Top btn -->
    <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
    <!-- Scroll Back to Top -->
   <!-- Jquery CDN -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   <!-- Typed.js cdn -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- particle.js links -->
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
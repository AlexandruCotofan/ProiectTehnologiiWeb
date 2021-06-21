<?php

session_start();


include("connection.php");
include("function.php");
$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section id="banner">
        <img src="poze/logo.jpg" class="logo">
        <div class="banner-text">
            <h2> Hello, <?php echo $user_data['user_name']; ?> ! </h2>
            <p2> <a href="logout.php">Logout</a> </p2>
            <h1>GYM</h1>
            <p>Train like a beast, look like a beauty.</p>
            <div class="banner-btn">
                <a href="generare.php"><span></span>GENERARE ANTRENAMENT</a>
                <a href="citate.html"><span></span>CITATE MOTIVAȚIONALE</a>

            </div>
            <div class="banner-btn">
                <a href="statistici.php"><span></span>STATISTICI GLOBALE</a>
                <a href="classment.php"><span></span>CLASAMENT</a>
            </div>
            <div class="banner-btn">
                <a href="recomand.php"><span></span>SĂLI RECOMANDATE</a>
                <a href="https://cdt-babes.ro/articole/indicele-de-masa-corporala-imc.php"><span></span>CALCULATOR IMC</a>
            </div>
    </section>

    <!--      feature-->
    <section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <H1>Why Choose Us</H1>
        </div>

        <div class="feature-box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p> Antrenor personal, instructor de fitness, kinetoterapeut, preparator fizic, psiholog sportiv, cu o experienta de peste 20 ani in domeniul sportiv si al sanatatii.</p>
                    </div>
                </div>


                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p> Antrenor personal, instructor de fitness, kinetoterapeut, preparator fizic, psiholog sportiv, cu o experienta de peste 20 ani in domeniul sportiv si al sanatatii.</p>
                    </div>
                </div>


                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <div class="feature-text">
                        <p> Antrenor personal, instructor de fitness, kinetoterapeut, preparator fizic, psiholog sportiv, cu o experienta de peste 20 ani in domeniul sportiv si al sanatatii.</p>
                    </div>
                </div>
            </div>

            <div class="features-img">
                <img src="poze/trainer.jpg">
            </div>
        </div>
    </section>




    <!--    Service-->

    <section id="service">


        <div class="title-text">
            <p>SERVICESS</p>
            <H1>We Provide Better</H1>
        </div>

        <div class="service-box">
            <div class="single-service">
                <img src="poze/serv1.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Cardio</h3>
                    <hr>
                    <p>Aici faci exercitii cardio!</p>
                </div>
            </div>
            <div class="single-service">
                <img src="poze/serv2.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Triceps-Biceps</h3>
                    <hr>
                    <p>Aici faci triceps-biceps!</p>
                </div>
            </div>
            <div class="single-service">
                <img src="poze/serv3.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Back</h3>
                    <hr>
                    <p>Aici faci spate!</p>
                </div>
            </div>
            <div class="single-service">
                <img src="poze/serv4.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Chest</h3>
                    <hr>
                    <p>Aici faci piept!</p>
                </div>
            </div>

        </div>
    </section>


    <!--    Testimonial-->


    <section id="testimonial">

        <div class="title-text">
            <p>TESTIMONIAL</p>
            <H1>What Clients Says</H1>
        </div>


        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="poze/cl1.jpg">
                    <div class="user-info">
                        <h4> Ivan Rupenski <i class="fa fa-twitter"></i></h4>
                        <small>@rupenski</small>
                    </div>
                </div>
                <p> O sala excelenta. Voi mai veni. Cea mai buna sala din Iasi...este dotata cu cele mai performante aparate de fitness </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="poze/cl2.jpg">
                    <div class="user-info">
                        <h4> Ioana Lewandowska <i class="fa fa-twitter"></i></h4>
                        <small>@lewanska</small>
                    </div>
                </div>
                <p> O sala excelenta. Voi mai veni. Cea mai buna sala din Iasi...este dotata cu cele mai performante aparate de fitness </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="poze/cl3.jpg">
                    <div class="user-info">
                        <h4> Robert Tiplenkov <i class="fa fa-twitter"></i></h4>
                        <small>@tiplenkov</small>
                    </div>
                </div>
                <p> O sala excelenta. Voi mai veni. Cea mai buna sala din Iasi...este dotata cu cele mai performante aparate de fitness </p>
            </div>
        </div>

    </section>


    <!--    footer-->
    <section id="footer">
        <img src="poze/footer.jpg" class="footer-img">
        <div class="title-text">
            <p>CONTACT</p>
            <H1>Visit Shop Today</H1>
        </div>

        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 8am to 11pm</p>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p>#30 abc Colony, xyz City IN <i class="fa fa-map-marker"></i></p>
                <p>example@website.com <i class="fa fa-paper-plane"></i></p>
                <p>+07 0743765923 <i class="fa fa-phone"></i></p>
            </div>


        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>



    </section>




    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        sideNav.style.right = "-250px";

        menuBtn.onclick = function() {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "poze/close.png";
            } else {
                sideNav.style.right = "-250px";
                menu.src = "poze/menu.png";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    </script>


</body>

</html>
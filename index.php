<?php include "script/database.php";?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="img/ferrylogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Home | Binangkas</title>
</head>
<body>
    <header>
        <a href="#" class="logo"> <img src="img/ferrylogo.png" alt=""><span class="logo-container">Binangkas</span></a>
        <ul class="navmenu">
            <li><a href="">Booking</a></li>
            <li><a href="">Article/Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <div class="nav-icon">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
        
    </header>
    <section class="main-home">
        <div class="main-text">
            <h5>Binangkas</h5>
            <h4>Experience the Beauty of the Philippines</h4>
            <p>Enjoy the Luxury of our Ships</p>
        </div>
        <div class="down-arrow">
            <a href="#destinations" class="down"><i class='bx bx-down-arrow-alt' ></i></a>
        </div>
    </section>
    <section class="destinations" id="destinations">
        <div class="center-text">
            <img src="img/Ship-Wheel.png" alt="" class="logo">
            <h1>Destinations</h1>
            <h3>Explore with us</h3>
        </div>
        <div class="locations">
            <div class="row">
                <img src="img/Dumaguete.jpg" alt="">
                <div class="location-texts">
                    <h5>Hot!</h5>
                </div>
                <div class="destination-description">
                    <h4>Dumaguete</h4>
                </div>
                
            </div>
            <div class="row">
                <img src="img/Surigao.jpg" alt="" style="height:100%;">
                <div class="location-texts">
                    <h5>Trending!</h5>
                </div>
                <div class="destination-description">
                    <h4>Surigao</h4>
                </div>
                
            </div>
            <div class="row">
                <img src="img/Leyte.jpeg" alt="" style="height:100%;">
                <div class="location-texts">
                    <h5>HOT!</h5>
                </div>
                <div class="destination-description">
                    <h4>Leyte</h4>
                </div>
                
            </div>
            <div class="row">
                <img src="img/chocolate-hills.jpg" alt="" style="height:100%;">
                <div class="location-texts">
                    <h5>CONTROVERSIAL!</h5>
                </div>
                <div class="destination-description">
                    <h4>chocolate Hills</h4>
                </div>
                
            </div>
            <div class="row">
                <img src="img/boracay.jpg" alt="" style="height:100%;">
                <div class="location-texts">
                    <h5>HOT!</h5>
                </div>
                <div class="destination-description">
                    <h4>Boracay</h4>
                </div>
                
            </div>
          
        </div>
        <div class="discover">
            <button class="discover-btn">DISCOVER <i class='bx bx-right-arrow-alt' ></i></button>
        </div>
    </section>
    <section class="reviews">

    </section>
    <section class="contact">
        <div class="contact-info">
            <div class="first-info">
                <h1>Helpful Links</h1>
                <p><a href="#">Terms and Conditions</a></p>
                <p><a href="#">Company Policy</a></p>
                <p><a href="#">Privacy Policy</a></p>
                <p><a href="#">Refund Policy</a></p>
                <p><a href="#">Rebooking</a></p>
            </div>
            <div class="second-info">
                <h1>Business Hours</h1>
                <p>Monday to Friday</p>
                <p>8AM-5PM</p>
                <p>Saturday</p>
                <p>8AM-12NN</p>
                <p></p>
            </div>
            <div class="third-info">
                <h1>Quick Links</h1>
                <p><a href="#">Home</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Routes</a></p>
                <p><a href="#">Schedules</a></p>
                <p><a href="#">FAQs</a></p>
            </div>
            
        </div>
        
    </section>
    <section class="footer">
        <div class="logo-center">
            <img src="img/ferrylogo.png" alt="">
        </div>
        <div class="logo-title">
                <h4>Binangkas</h4>
            </div>
            <ul class="social-icons">
                <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                <li><a href="#"><i class='bx bxl-facebook-circle' ></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
            </ul>
    </section>
    <div class="end-text">
    <p>Copyright © 2024. All Rights Reserved. Powered by div.</div></p>

    </div>
    <script src="js/header.js"></script>
</body>
</html>
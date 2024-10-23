<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About <i class="fa fa-user-plus" aria-hidden="true"></i></title>

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!--Font Awsome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <!-- Header section -->
     <section class="header">
        <a href="home.php" class="logo">travel.</a>
        
        <!-- Nav Bar -->
        <nav class="navbar">
            <a href="home.php" class="nav-link">Home</a>
            <a href="package.php" class="nav-link">Packges</a>
            <a href="place.php" class="nav-link">Places</a>
            <a href="book.php" class="nav-link">Booking</a>
            <a href="about.php" class="nav-link">About Us</a>
            <a href="contact.php" class="nav-link">Contact Us</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

     </section>

     <!-- Header section End -->

     <div class="heading" style="background-image: url(images/book-bg.jpg);">
        <h1>Booking</h1>
     </div>

    <!-- Booking Main Section start -->
     <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your Email" name="email">
                </div>

                <div class="inputBox">
                    <span>Conatct Number :</span>
                    <input type="number" placeholder="Enter your phone number" name="phone">
                </div>

                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                
                <div class="inputBox">
                    <span>Where to:</span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="How many with you" name="guests">
                </div>

                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
           
            <input type="submit" value="submit" class="btn" name="send">

        </form>
     </section>








    <!-- Booking Main Section end -->





























     <!-- Footer Section -->
     <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Packges</a>
                <a href="place.php"> <i class="fas fa-angle-right"></i> Places</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Booking</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-123-1234 </a>
                <a href="#"> <i class="fas fa-phone"></i> +123-345-5678 </a>
                <a href="#"> <i class="fas fa-envelope"></i> gihanthilina1997@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Gampaha, Sri Lanka - 11108 </a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> Facebook </a>
                <a href="#"> <i class="fab fa-x"></i> X </a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
            </div>
        </div>

        <div class="credit">Developed by <b><span>CeylonTK Developer</span></b> | All Right Reserved</div>

     </section>



<!-- swipper JS link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- JS file -->
<script src="script.js"></script>
</body>
</html>
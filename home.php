<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Home</title>

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

     <!-- Head Slider Start -->
      <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(slider-image/1.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover and Travel</span>
                            <h3>Travel around the world</h3>
                            <a href="package.php" class="btn">Explore more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(slider-image/2.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover and Travel</span>
                            <h3>Discover the new places</h3>
                            <a href="package.php" class="btn">Explore more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(slider-image/3.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover and Travel</span>
                            <h3>Make your tour worthwhile</h3>
                            <a href="package.php" class="btn">Explore more</a>
                    </div>
                </div>
            </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
      </section>
     <!-- Head Slider End -->

     <!--service section start -->
     <section class="service">
        <h1 class="heading-title"> Our Service</h1>
        <div class="box-container">
            <div class="box">
                <img src="service-box-images/1.jpg" alt="">
                    <h3>Adventure</h3>
                </img>
            </div>
            <div class="box">
                <img src="service-box-images/2.jpg" alt="">
                    <h3>Tour Guide</h3>
                </img>
            </div>
            <div class="box">
                <img src="service-box-images/3.jpg" alt="">
                    <h3>Trekking</h3>
                </img>
            </div>
            <div class="box">
                <img src="service-box-images/4.jpg" alt="">
                    <h3> Camping</h3>
                </img>
            </div>
            <div class="box">
                <img src="service-box-images/5.jpg" alt="">
                    <h3>Camp Fire</h3>
                </img>
            </div>
            <div class="box">
                <img src="service-box-images/6.jpg" alt="">
                    <h3>Off-Road</h3>
                </img>
            </div>
        </div>
     </section>
     <!--service section end -->

     <!--Decribe About us section start-->
     <section class="home-about">

        <div class="image">
            <img src="home-images/about.jpg" alt="aboutus">
        </div>
        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est molestias fuga magnam, voluptas facilis suscipit temporibus corporis culpa porro, ad ipsum voluptates eligendi vitae repudiandae repellat dignissimos libero quo. Consequatur.</p>
            <a href="" class="btn">Read more</a>
        </div>

     </section>
     <!--Decribe About us section end-->

    <!--home package section start -->
    <section class="home-packges">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="../travel-project/home-images/package-home.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, nobis?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../travel-project/home-images/pacakge-home-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, nobis?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../travel-project/home-images/package-home-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, nobis?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
    </section>
    <!--home package section end -->

    <!--home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50%</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, ut.</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>
    <!--home offer section end -->

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
                <a href="#" style="text-transform: lowercase;"> <i class="fas fa-envelope"></i> gihanthilina1997@gmail.com </a>
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
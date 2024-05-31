<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Bangladesh</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>Explore</span> Bangladesh</a>
    
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#tourist">tourist places</a>
        <a href="#contact">contact</a>
        
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
        
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- ueser login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="loginvalidation.php" method="post">
        <h3>User login</h3>
        <input type="email" class="box" placeholder="enter your email" name="email">
        <input type="password" class="box" placeholder="enter your password" name="password">
        <input type="submit" name="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="fpass.php">click here</a></p>
        <p>don't have and account? <a href="register.php">register now</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Explore Bangladesh</h3>
        <p>Online Tourism Guide</p>
        
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/1.mp4"></span>
        <span class="vid-btn" data-src="images/2.mp4"></span>
        <span class="vid-btn" data-src="images/3.mp4"></span>
        
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->


<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
         </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
             </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            
        </div>
        
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            
        </div>
        

</section>

<!-- services section ends -->



<!-- gallery section starts  -->

<section class="tourist" id="tourist">

    <h1 class="heading">
        <span>Tourist</span>
        <span>P</span>
        <span>l</span>
        <span>a</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/rajshahi.jfif" alt="">
            <div class="content">
                <h3>Rajshahi Division</h3>
                <p>Rajshahi is a metropolitan city and a major urban, commercial and educational centre of Bangladesh.</p>
                <a href="rajshahi.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/dhaka.jpg" alt="">
            <div class="content">
                <h3>Dhaka Division</h3>
                <p>Dhaka is the capital city of Bangladesh, in southern Asia.</p>
                <a href="Dhaka.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/sylhet.jpg" alt="">
            <div class="content">
                <h3>Sylhet Division</h3>
                <p>Sylhet is a city in eastern Bangladesh, on the Surma River.</p>
                <a href="sylhet.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/rangpur.jpg" alt="">
            <div class="content">
                <h3>Rangpur Division</h3>
                <p>Rangpur is one of the major cities in Bangladesh and Rangpur Division.</p>
                <a href="rangpur.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/my.jpg" alt="">
            <div class="content">
                <h3>Mymensingh Division</h3>
                <p>Mymensingh Division is one of the eight administrative divisions of Bangladesh.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/khulna-sidebar.jpg" alt="">
            <div class="content">
                <h3>Khulna Division</h3>
                <p>Khulna is the third-largest city in Bangladesh, after Dhaka and Chittagong.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/chat.jpg" alt="">
            <div class="content">
                <h3>Chattogram Division</h3>
                <p>Chittagong is large port city on the southeastern coast of Bangladesh.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        
        <div class="box">
            <img src="images/Barishal.jpg" alt="">
            <div class="content">
                <h3>Barishal Division</h3>
                <p>Chittagong is large port city on the southeastern coast of Bangladesh.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>

</section>

<!-- gallery section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="contactvalidation.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="phone" name="phone">
                <input type="text" placeholder="subject" name="subject">
            </div>
            <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Explore Bangladesh</h3>
            <p>online Tourist Guide</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 017000000 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 01788665544 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> explorebangladesh@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> dayarampur, natore, rajshai </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> tourist places </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
            
            
            
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>


</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="explorebd.js"></script>

</body>
</html>
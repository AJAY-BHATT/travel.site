<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Header start -->
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background: url(images/book-bg.jpg) no-repeat;">

        <h1>Book</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span> Name:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="place you eant to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals</span>
                    <input type="date"  name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving</span>
                    <input type="date"  name="leaving">
                </div>


            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>


    <!-- Footer Section start  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> +123-456-789 </a>
                <a href="#"> <i class="fas fa-angle-right"></i>+111-222-333 </a>
                <a href="#"> <i class="fas fa-angle-right"></i>ajaybhatt1028@gmail.com</a>
                <a href="#"> <i class="fas fa-angle-right"></i>Dehradun, uttarakhand 248008</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"> <i class="fab fa-whatsapp"></i> whatsapp</a>

            </div>

        </div>
        <div class="credit">created by <span>Ajay Bhatt</span> || All right reserved!</div>
    </section>
    <!-- Footer section end -->

    <!-- Header end -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"> </script>



    </script>
</body>

</html>
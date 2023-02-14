<?php include('./registration/connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>MGTRAVELS</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href= "ourpackages.php">Our Packages</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="index.php">
                <img src="img/logo.jpg" alt="MGTRAVELS Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
            </div>
        <ul>
            <li>
                <a class="active" href="index.php">Home</a>
            </li>
            <li>
                <a href="ourpackages.php">Our Packages</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="about.html">About Us</a>
            </li>
            
        </ul>
    </nav>

    

    <div id="banner">
    <h1> WELCOME TO <span class="colorchange">MG TRAVELS</span>.<br>
				Tourism Treated Best. </h1>
    </div>

    <main>
        <a href="blogslist.html">
        	<h2 class="section-heading">OUR SPECIAL PACKAGES</h2>
    	</a>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/pooja.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="spirit.html">
                        <h3>Spiritual Tour </h3>
                    </a>
                    <p>
                        Faith is the key to spiritual growth and requires a deep and personal connection with God. 
                         He wants to be the head of our hearts, king of our souls, and guide to our spirits. 
                          By allowing Him free reign in these areas we create an opportunity for lasting intimacy with the Creator.
                    </p>
                    <a href="spirit.html" class="btn-readmore">Know more</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="blogpost.html">
                        <img src="img/honey.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="honey.html">
                        <h3>Honeymoon Packages</h3>
                    </a>
                    <p>
                        The Mesmerising Packages will captivate you and your loved one on this short-long vacation. 
                        Spend some lovely time together with a relaxing stay at Paradise Island Resort & Spa. 
                        With the Indian Ocean surrounding this property, try out windsurfing for some excitement.
                    </p>
                    <a href="honey.html" class="btn-readmore">Know more</a>
                </div>
            </div>
        </section>

        


        <h2 class="section-heading">CUSTOMISE YOUR TOUR</h2>

        <section id="section-source">
            <p>
                Customize your own tour by very of own user friendly upgrade tour interface, where you would able to choose your
                own places, mode of transport and many more features like this.

            </p>
            <a href="customise.html" class="btn-readmore">CUSTOMISE NOW</a>
        </section>
        <br>
        <br>

        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                       
                       
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by MG TRAVELS Coders</p>
            </div>
        </footer>

    </main>

    <script src="main.js"></script>
</body>

</html>
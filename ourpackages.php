<?php include('./registration/connection.php') ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
     <title>Document</title>
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

    

    <a href="blogslist.html">
        <h2 class="section-heading">Our Packages</h2>
    </a>

    <section>
        <div class="card">
            <div class="card-image">
                <a href="#">
                    <img src="img/taj.jpg" alt="Card Image">
                </a>
            </div>
            <div class="card-description">
                <a href="Delhi.html">
                    <h3><?php
                    $sql = "SELECT * FROM packages WHERE PID=1";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PNAME"]. "<br>";
}
} else {
echo "0 results";
}
?></h3>
                </a>
                <p>
            
                
                <?php
                $sql = "SELECT * FROM packages WHERE PID=1";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PDESC"]. "<br>";
}
} else {
echo "0 results";
}
?>
                </p>
                <a href="delhi.php" class="btn-readmore">BOOK NOW</a>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <a href="#">
                    <img src="img/rajasthan.jpg" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="rajasthan.html">
                    <h3><?php
                $sql = "SELECT * FROM packages WHERE PID=2";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PNAME"]. "<br>";
}
} else {
echo "0 results";
}
?></h3>
                </a>
                <p>
               
                <?php
                $sql = "SELECT * FROM packages WHERE PID=2";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PDESC"]. "<br>";
}
} else {
echo "0 results";
}
?>
                </p>
                <a href="rajasthan.html" class="btn-readmore">BOOK NOW</a>
            </div>
            <br>
        </div>
        </section>
        <br><br>
        <section>
        <div class="card">
            <div class="card-image">
                <a href="#">
                    <img src="img/tamilnadu.jpg" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="tamilnadu.html">
                    <h3><?php
                $sql = "SELECT * FROM packages WHERE PID=3";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PNAME"]. "<br>";
}
} else {
echo "0 results";
}
?></h3>
                </a>
                <p>
                   
                    <?php
                $sql = "SELECT * FROM packages WHERE PID=3";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PDESC"]. "<br>";
}
} else {
echo "0 results";
}
?>
                </p>
                <a href="tamilnadu.html" class="btn-readmore">BOOK NOW</a>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <a href="#">
                    <img src="img/kerala.jpg" alt="Card Image">
                </a>
            </div>
            <div class="card-description">
            <a href="kerala.html">
                <h3><?php
                $sql = "SELECT * FROM packages WHERE PID=4";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PNAME"]. "<br>";
}
} else {
echo "0 results";
}
?></h3>
            </a>
                <p>
                   
                    <?php
                $sql = "SELECT * FROM packages WHERE PID=4";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo $row["PDESC"]. "<br>";
}
} else {
echo "0 results";
}
?>
                </p>
                <a href="kerala.html" class="btn-readmore">BOOK NOW</a>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
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


 </body>
 </html>
 
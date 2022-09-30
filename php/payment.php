<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="..\resources\images\logo.png" type="image/x-icon">
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="..\css\payment.css">
</head>

<body>
    <header class="clearfix">
        <div class="logo-div">
            <a href="index.php"><img src="..\resources\images\logo.png" alt="image not found"></a>
        </div>
        <div class="nav-menu">
            <ul>
                <li><i class="fas fa-home icon"></i><a class="Home-active" href="index.php">HOME</a></li>
                <li class="media-dropdown-container"><i class="fas fa-film icon"></i><a href="media.php">MEDIA</a>
                    <div class="media-dropdown-content">
                        <ul>
                            <li><a href="#">FTP 1</a></li>
                            <li><a href="#">FTP 2</a></li>
                            <li><a href="#">Partner FTP 1</a></li>
                            <li><a href="#">Partner FTP 2</a></li>
                            <li><a href="#">Live TV 1</a></li>
                            <li><a href="#">Live TV 2</a></li>
                            <li><a href="#">Live TV 3</a></li>
                        </ul>
                    </div>
                </li>
                <li class="about_us-dropdown-container media-dropdown-container"><i
                        class="fas fa-info-circle icon"></i><a href="about_us.php">ABOUT
                        US</a>
                    <div class="about_us-dropdown-content media-dropdown-content">
                        <ul>
                            <li><a href="#">Corporate Information</a></li>
                            <li><a href="#">Why Us</a></li>
                            <li><a href="#">Quality Policy</a></li>
                        </ul>
                    </div>
                </li>
                <li class="services-dropdown-container media-dropdown-container"><i class="fas fa-cogs icon"></i><a
                        href="services.php">SERVICES</a>
                    <div class="services-dropdown-content media-dropdown-content">
                        <ul>
                            <li><a href="#">Internet Services</a></li>
                            <li><a href="#">Data Connectivity</a></li>
                            <li><a href="#">Domain & Hosting</a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fas fa-gift icon"></i><a href="packages.php">PACKAGES</a></li>

                <li class="payment-dropdown-container media-dropdown-container"><i
                        class="fas fa-dollar-sign icon"></i><a class="payment-active" href="payment.php">PAYMENT</a>
                    <div class="payment-dropdown-content media-dropdown-content">
                        <ul>
                            <li><a href="#">Payment Portal</a></li>
                        </ul>
                    </div>
                </li>
               
                <li><i class="fas fa-mobile icon"></i><a href="contact_us.php">CONTACT US</a></li>
            </ul>
        </div>

        <div class="Search-icon">
            <label for="Search"><i class="fab fa-searchengin"></i></label>
            <input type="text" id="Search" placeholder="SEARCH HERE">
        </div>
    </header>

    <section class="content">
        <div class="login">
            <h3 style="color:honeydew; font-size:30px;margin: 50px 0px;">Sign In</h3>

            <form action="validation.php" method="post">
                <div class="form-content">
                    <label for="CID">
                        <i class="fas fa-key icon"></i>
                    </label>
                    <input type="number" name="CID" placeholder="Customer ID" id="CID">
                </div>
                <div class="form-content">
                    <label for="Name">
                        <i class="fas fa-user icon"></i>
                    </label>
                    <input type="text" name="email" placeholder="Enter your email" id="Name">
                </div>
                <div class="form-content">
                    <label for="password">
                        <i class="fas fa-mobile-alt icon"></i>
                    </label>
                    <input type="password" name="phn" id="password" placeholder="Phone No">
                </div>
                <?php
                    if(isset($_REQUEST['Invalid']))
                    echo $_REQUEST['Invalid'];
                ?>
                <div class="form-content input_button"> 
                    <input style="margin-right:10px" type="submit" name="LOGIN" value="Login">
                    <input type="submit" name="ADMIN" value="Admin">
                </div>
            </form>

            <span style="display:block; margin-top: 50px;font-size: 20px;">Support: 01725048190, 01701064692</span>
        </div>
    </section>


    <section class="payment-methods">
        <div class="intro-flex-container">
            <div class="intro-flex-items">
                <p style="text-align: justify;"> "HELLO WORLD" is one of the best internet service providers in Dhaka
                    city.We
                    provide high speed internet with FTTX connection. This is the best platform for Outsourcing and
                    Gaming. "HELLO WORLD" Believes in Service, not in advertisement.</p>
            </div>
            <div class="intro-flex-items">
                <h4><a href="#">SERVICES</a></h4>
                <a href="#">Internet Services</a>
                <a href="#">Data Connectivity</a>
                <a href="#">Domain & Hosting</a>
            </div>
            <div class="intro-flex-items">
                <h4><a href="#">MEDIA</a></h4>
                <a href="#">FTP 1</a>
                <a href="#">FTP 2</a>
                <a href="#">Live TV 1</a>
            </div>
            <div class="intro-flex-items">
                <h4><a href="#">ABOUT</a></h4>
                <a href="#">Corporate</a>
                <a href="#">Why Us</a>
                <a href="#">Quality Policy</a>
            </div>
            <div class="intro-flex-items">
                <h4><a href="#">LEGAL</a></h4>
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="payment-methods-image">
            <a href="payment.php"><img src="../resources/images/payment-methods.png" alt="Not Found"></a>
        </div>
    </section>

    <footer class="clearfix">
        <span style="color: rgb(245, 230, 240);">&copy;All rights reserved by <strong
                style="color:rgb(241, 18, 167);">"HELLO WORLD"</strong></span>
        <div class="social-icon">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>


</body>

</html>
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
    <link rel="stylesheet" href="..\css\packages.css">
</head>

<body>
    <header class="clearfix">
        <div class="logo-div">
            <a href="index.php"><img src="..\resources\images\logo.png" alt="image not found"></a>
        </div>
        <div class="nav-menu">
            <ul>
                <li><i class="fas fa-home icon"></i><a href="index.php">HOME</a></li>
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
                <li><i class="fas fa-gift icon"></i><a class="packages-active" href="packages.php">PACKAGES</a></li>

                <li class="payment-dropdown-container media-dropdown-container"><i
                        class="fas fa-dollar-sign icon"></i><a href="payment.php">PAYMENT</a>
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

    <div class="dummy">
        <h1>PRICING PLAN</h1>
    </div>

    <p id="para">Eight Popular Packages are mentioned below. For more custom package please contact with us. No hidden fees applicable, Flat Rate.</p>

    <section class="packages clearfix">
        <div class="card">
            <ul>
                <li>Package-1</li>
                <li>BDT 500 /month</li>
                <li>3-10 mbps</li>
                <li>No Real IP</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-2</li>
                <li>BDT 700 /month</li>
                <li>4-15 mbps</li>
                <li>No Real IP</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-3</li>
                <li>BDT 800 /month</li>
                <li>5-18 mbps</li>
                <li>No Real IP</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-4</li>
                <li>BDT 1000 /month</li>
                <li>7-22 mbps</li>
                <li>Real IP (on demand)</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-5</li>
                <li>BDT 1200 /month</li>
                <li>9-25 mbps</li>
                <li>Real IP(on demand)</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-6</li>
                <li>BDT 1500 /month</li>
                <li>12-30 mbps</li>
                <li>Real IP(on demand)</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-7</li>
                <li>BDT 2000 /month</li>
                <li>16-40 mbps</li>
                <li>Real IP(on demand)</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Package-8</li>
                <li>BDT 2500 /month</li>
                <li>20-50 mbps</li>
                <li>Real IP(on demand)</li>
                <li>Unlimited Usage</li>
                <li><a href="contact_us.php"><button class="btn">JOIN US</button></a></li>
            </ul>
        </div>
    </section>

    <section class="payment-methods">
        <div class="intro-flex-container">
            <div class="intro-flex-items">
                <p style="text-align: justify;"> "HELLO WORLD" is one of the best internet service providers in Dhaka city.We
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
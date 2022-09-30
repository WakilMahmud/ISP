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
    <!-- css link -->
    <link rel="stylesheet" href="..\css\index.css">
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

    <div class="banner-section">
        <div class="text">
            <H2>HOW CAN WE HELP YOU?</H2>
            <p>
                We are online 24/7 <br>
                You are always welcome <br>
                Every request is critical for us <br>
                Just Contact Us
            </p>
        </div>
        <div class="shadow-effect">
        </div>
    </div>

    <div class="welcome-section">
        <div class="another-section">
            <span style="color: rgb(241, 18, 167); font-size: 30px;">Welcome To <strong> "HELLO WORLD"</strong></span>
            <span style="color: rgb(245, 226, 239); font-size: 30px;"> - High Speed Internet</span>
            <p style="color: slategrey; font-size: 20px;">
                We believe, the right technology makes our life easier and brings people closer. Find solutions for your
                Home & Office.
            </p>
            <button class="btn">JOIN NOW</button>
        </div>
    </div>

    <section class="quality flex-container">
        <div class="flex-items">
            <h3>High Speed Internet</h3>
            <p>"HELLO WORLD" has deployed a high-quality Network infrastructure backbone that consists of 20+ km wide optical
                fiber and Metropolitan Area Network (MAN) around the capital city(Dhaka) and specially concentrated in
                Hazaribagh, Rayer Bazar and Dhanmondi Zone.</p>
        </div>
        <div class="flex-items">
            <h3>Power Backup</h3>
            <p>"HELLO WORLD" has it’s own generator and online UPs backup to keep electric backup even if the electricity
                will continue to down for 36 hours. Our strong power backup will help our clients to utilize even the
                PDB/Desco/Dpdc electricity will down for long.</p>
        </div>
        <div class="flex-items">
            <h3>99% Uptime</h3>
            <p>We wish if we could up our clients for 100% time to connect. As our network has been increasing we have
                been focusing to Door-to-Door FTTH (Fiber To The Home) connectivity. In a very rare case our home users
                (under FTTH) become out of service. Due to our utmost responsible and efficient engineers and support
                personnel, our clients will be connected for long.</p>
        </div>
        <div class="flex-items">
            <h3>BDIX Conectivity</h3>
            <p>BDIX (Bangladesh Internet Exchange) is a leading foundation to connect all or major ISPs to route their
                own network within themselves. "HELLO WORLD" has already been connected with BDIX directly and offering
                clients as a VAS (value added service). Thus a lots of local torrent and download sites, major
                government sites and few tv streaming (as per demand) will be available full time even if the global
                route or Internet service is down for any national disaster or gateway issues.</p>
        </div>
        <div class="flex-items">
            <h3>CUSTOMER FOCUS</h3>
            <p>We only focus to our clients to ensure best quality service and quick response for better and quickest
                service with in our network and service area.
            </p>
        </div>
        <div class="flex-items">
            <h3>HD/4K Youtube</h3>
            <p>Our shared customers shall get minimum HD to 4K quality videos to stream without any buffering. As we
                have our own cache and have lots of videos in cached along with enough dedicated internet bandwidth to
                supply those videos in scheduled to our cache. Any package client will find buffer less services for
                youtube along with many google services.</p>
        </div>

        <div class="why-us">
            <h2>WHY US</h2>
        </div>
    </section>

    <section class="package-section ">
        <div class="package clearfix">
            <h3>Our Regular Packages</h3>
            <p>We provide dedicated high-speed connectivity for businesses that need world-class reliability and optimal
                performance, scalability and security. Find your solutions here.</p>
            <div class="card-box">
                <div class="card">
                    Upto 10 MBPS <br>
                    Pack-1
                </div>
                <div class="card">
                    Upto 15 MBPS <br>
                    Pack-2
                </div>
                <div class="card">
                    Upto 18 MBPS <br>
                    Pack-3
                </div>
                <div class="card">
                    Upto 22 MBPS <br>
                    Pack-4
                </div>
                <div class="card">
                    Upto 25 MBPS <br>
                    Pack-5
                </div>
                <div class="card">
                    Upto 30 MBPS <br>
                    Pack-6
                </div>
                <div class="card">
                    Upto 40 MBPS <br>
                    Pack-7
                </div>
                <div class="card">
                    Upto 50 MBPS <br>
                    Pack-8
                </div>
                <a href="packages.php"><button>View All Packages</button></a>
            </div>
        </div>
        <div class="package-img">
            <img src="https://d3cxs4o04w3o17.cloudfront.net/assets/img/cartoon-sit-rocket.png" alt="Not Found">
        </div>
    </section>

    <section class="customers">
        <h3>Our Customers</h3>
        <div class="image"><img src="../resources/images/bashmoti-kacchi.jpg" alt="Not Found"></div>
        <div class="image"><img src="../resources/images/rabbits hat.png" alt="Not Found"></div>
        <div class="image"><img src="../resources/images/mastul foundation.jfif" alt="Not Found"></div>
        <div class="image"><img src="../resources/images/company.jpg" alt="Not Found"></div>
        <div class="image"><img src="../resources/images/college.jpg" alt="Not Found"></div>
    </section>


    <section class="faq">
        <ul>
            <li>One-time installation charge is 2,000 Tk. applicable for all new Direct Fiber Optic connections</li>
            <li>Our packages are monthly basis, and don’t have any FUP</li>
            <li>Per Real IP comes at 200 Tk. (Inc. VAT) per month</li>
            <li>For Wi-Fi router we charge BDT 2,000 (Inc. VAT)</li>
            <li>Installation time: Maximun 1 Hour after confirmation</li>
        </ul>
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
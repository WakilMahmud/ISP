<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="..\resources\images\logo.png" type="image/x-icon">
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="..\css\media.css">

    <title>ISP</title>
</head>

<body>
    <header class="clearfix">
        <div class="logo-div">
            <a href="index.php"><img src="..\resources\images\logo.png" alt="image not found"></a>
        </div>
        <div class="nav-menu clearfix">
            <ul>
                <li><i class="fas fa-home icon"></i><a href="index.php">HOME</a></li>
                <li class="media-dropdown-container"><i class="fas fa-film icon"></i><a class="media-active"
                        href="media.php">MEDIA</a>
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

    <section class="media-content my-5">
        <div class="container clearfix">
            <div class="row d-flex row-h1 ">
                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\logo.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">Logo Desing</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/eac3szWEClA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\Graphic Design.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">Graphic Desing</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/tMw-vA12d0Y"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\Git GitHub.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">Git & Github</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/0Wm6hmTgsHQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex row-h1 ">
                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\How to THINK in English  No More Translating in Your Head!.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">How to THINK in English</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/pUwHhhRy8WQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\Stress in Spoken English II Rokhsana Akhter Rupee II Pronunciation Expert.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">Stress in Spoken English</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/glEukbkcivE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\How to become an Android Developer   Step by Step   Freelancing and Placement.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">How to become an Android Developer</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/bE_Hiv7ltEk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex row-h1 ">
                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\Learning PLSQL programming.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">PL/SQL</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/fHR1Z12aJhc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\PHP Session and Cookies Bangla Tutorial  php Tutorial for Beginners Bangla - 18.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">PHP Session and Cookies</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/eac3szWEClA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                        <video width="350" height="280" controls>
                            <source src="..\resources\videos\React JS Crash Course - React Crash Course Bangla - React JS Bangla Tutorial for Beginners.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5 class="text-center text-danger">React JS Crash Course</h5>
                        <!-- <iframe width="350" height="280" src="https://www.youtube.com/embed/eac3szWEClA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex row-h1 ">
                <div class="col-4">
                    <div class="item-h1">
                    <iframe width="350" height="280" src="https://www.youtube.com/embed/sctOYN2pMs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                    <iframe width="350" height="280" src="https://www.youtube.com/embed/EiYm20F9WXU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-4">
                    <div class="item-h1">
                    <iframe width="350" height="280" src="https://www.youtube.com/embed/EV92yoL1m_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="media.php">1</a></li>
            <li class="page-item"><a class="page-link" href="media2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="media3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="media2.php">Next</a></li>
        </ul>
    </nav>


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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
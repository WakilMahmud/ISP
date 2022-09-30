<?php
    
    session_start(); //for receiving $package_var from userPayment.php page
    $your_package = $_SESSION['your_package'];
    $selected_package = $_POST['PACKAGE'];

    // echo "$your_package";
    // echo "$selected_package";
     
?>
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

    <link rel="stylesheet" href="..\css\contact_us.css">

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
                <li><i class="fas fa-briefcase icon"></i><a href="career.php">CAREER</a></li>
                <li><i class="fas fa-mobile icon"></i><a href="contact_us.php">CONTACT US</a>
                </li>
            </ul>
        </div>

        <div class="Search-icon">
            <label for="Search"><i class="fab fa-searchengin"></i></label>
            <input type="text" id="Search" placeholder="SEARCH HERE">
        </div>
    </header>
    
    <?php
        if($your_package==$selected_package)
        echo "<div class='alert alert-success text-center' role='alert'>Payment is Successfull. Thank you for using our service.";
        else {
            echo "<div class='alert alert-danger text-center' role='alert'>  Error!!! Please select your package properly."."<br>"."Go Back";
        }
    ?>
   

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
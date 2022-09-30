<?php
    $insert = false;
    $id;

    if(isset($_POST['submit']))   //name
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "isp";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

    
    //Insert value
        $name =  $_POST['name'];      
        $email =  $_POST['email'];  //name
        $phone =  $_POST['phone'];
        $package =  $_POST['Packages'];

        if($name && $email && $phone && $package)
        {
            //sql query to be executed
            $sql = "INSERT INTO `contact_form`(`Full_Name`, `Email`, `Phone`, `Package`) 
            VALUES ('$name', '$email','$phone', '$package')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
            echo "Error: " . $sql . mysqli_error($conn);
            }
            else{
                $insert = true;
            }
        }

         //sql query to be executed
         $sql = "SELECT ID FROM `contact_form` where Full_name='$name' and Email='$email' and Phone='$phone'";
         $result = mysqli_query(mysqli_connect($servername, $username, $password,$database), $sql);

        $row = mysqli_fetch_assoc($result);
        $id = "$row[ID]";
       
    }
   
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
    
                <li><i class="fas fa-mobile icon"></i><a class="career-active" href="contact_us.php">CONTACT US</a>
                </li>
            </ul>
        </div>

        <div class="Search-icon">
            <label for="Search"><i class="fab fa-searchengin"></i></label>
            <input type="text" id="Search" placeholder="SEARCH HERE">
        </div>
    </header>


    <section id="Contact_Form" class="text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3 class="text-left text-primary">Get In Touch</h3>
                    <hr>

                    <form action="contact_us.php" method="post" class="text-dark">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                id="email">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="Packages">Packages</label>
                            <select name="Packages" id="Packages" class="form-control">
                                <option>Package-1: 500/month</option>
                                <option>Package-2: 700/month</option>
                                <option>Package-3: 800/month</option>
                                <option>Package-4: 1000/month</option>
                                <option>Package-5: 1200/month</option>
                                <option>Package-6: 1500/month</option>
                                <option>Package-7: 2000/month</option>
                                <option>Package-8: 2500/month</option>                        
                            </select>
                        </div>

                        <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                        <button type="submit" name="submit" class="btn btn-danger btn-lg">Submit</button>
                    </form>

                    <?php 
                        if($insert)
                        { 
                            echo "<div class='alert alert-success mt-3' role='alert'>Thank you for purchasing "."<h5 class='text-danger'>$package</h5>"
                            ."Your CID number : "."<h5 class='text-danger'>$id</h5></div>";
                        }
                    ?>
                </div>

                <div class="col-8 clearfix">
                    <h3 class="text-left text-primary">Contact Details</h3>
                    <hr>
                    <p class="text-muted">Feel free to call us anytime. we are always ready for your call.</p>
                    <hr>

                    <div class="d-inline-block bg-dark py-4 px-3 float-left ">
                        <h5 class="text-left text-danger">
                            Corporate Office:
                        </h5>
                        <p class="text-muted">
                            <span class="text-white">Address: </span><br>
                            Address: 80, Sher-E-Bangla Road, Rayer Bazar,<br> West Dhanmondi, Dhaka-1209

                            <br><br>

                            <span class="text-white"> Email: </span> <br>
                            info@gungchil.net

                            <br><br>

                            <span class="text-white"> HOTLINE: </span><br>
                            +8801623552636, +8801747444567

                            <br><br>
                            <span class="text-white"> Support:</span><br>
                            +8801623552636

                            <br><br>

                            <span class="text-white">Admin:</span> <br>
                            +8809639000039
                        </p>
                    </div>

                    <div class="d-inline-block bg-dark py-4 px-3 ml-5">
                        <h5 class="text-left text-danger">
                            Branch Offices:
                        </h5>
                        <p class="text-muted">
                            <span class="text-white">POP 1: </span><br>
                            Address: 80, Sher-E-Bangla Road, Rayer Bazar, <br>
                            West Dhanmondi, Dhaka-1209

                            <br><br>

                            <span class="text-white"> POP 2: </span> <br>
                            Address: 80, Sher-E-Bangla Road, Rayer Bazar,<br> West Dhanmondi, Dhaka-1209

                            <br><br>

                            <span class="text-white"> POP 3: </span><br>
                            Address: 80, Sher-E-Bangla Road, Rayer Bazar,<br> West Dhanmondi, Dhaka-1209

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container mb-5">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1255808935603!2d90.3644173149812!3d23.74290078459303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4892d13b3f%3A0x2e37488e13fada81!2zR1VOR0NISUwtIOCml-CmvuCmmeCmmuCmv-Cmsg!5e0!3m2!1sen!2sbd!4v1620001589050!5m2!1sen!2sbd"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div> -->



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
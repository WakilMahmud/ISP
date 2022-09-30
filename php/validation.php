<?php
    
    if(isset($_POST['LOGIN']))   //name
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "isp";


        //Insert value
        $cid = $_POST['CID'];   
        $email =  $_POST['email'];      
        $phone =  $_POST['phn'];  //name
        


        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `contact_form` WHERE `Email` = '$email' and Phone='$phone' and ID='$cid'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        // echo "login";
        // echo "$cid $email $phone";
        // echo "$row[ID], $row[Email], $row[Phone]";
        if($row['Phone']==$phone and $row['ID']==$cid and $row['Email']==$email)
        header("location: userPayment.php?ID=".$cid."&Email=".$email."&Phone=".$phone);
        else {
        header("location: payment.php?Invalid=Your CID/Email/Phone_No is wrong."); 
        }
    }

    elseif(isset($_POST['ADMIN']))   //name
    {
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "isp";


        //Insert value
        $id = $_POST['CID'];   
        $email =  $_POST['email'];      
        $phone =  $_POST['phn'];  //name


        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `admin` WHERE ID='$id' and Email='$email' and Phone='$phone'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        // echo "admin";
        // echo "$id $email $phone";
        // echo "$row[ID], $row[Email], $row[Phone]";
 
        if($row['Phone']==$phone and $row['ID']==$id and $row['Email']==$email)
        header("location: show.php"); 
        else {
        header("location: payment.php?Invalid=Your CID/Email/Phone_No is wrong."); 
        }
    }
?>
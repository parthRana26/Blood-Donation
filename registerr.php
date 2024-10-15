<?php
    if(isset($_POST['uploaded'])){

        // Database connection settings
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'blood'; 
    
        // Create a connection to the database and Check for connection errors
        $con = mysqli_connect($host, $user, $pass, $db) or die("Connection Fail..." . mysqli_error($con));

        // if ($con->connect_error) {
        //     die("Connection failed: " . $con->connect_error);
        // }

        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $blood_group = $_POST['blood_group'];
        $address = $_POST['address'];

        // echo "<br>Name:" . $username;
        // echo "<br>E-mail:" . $email;
        // echo "<br>Phone no:" . $mobile_no;
        // echo "<br>Blood Group" . $blood_group;
        // echo "<br>Address:" . $address;

        // echo "Name: $name" . "Phone number: $ph";

        $q = "INSERT INTO register VALUES ('$username', '$email', '$mobile_no', '$blood_group', '$address')";
        $query = mysqli_query($con,$q) or die("Insertion Fail..." . mysqli_error($con));

        if(isset($query)){
            include('campaigns.html');
        }
    }
?>

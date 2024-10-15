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

        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // echo "<br>Name:" . $username;
        // echo "<br>E-mail:" . $email;
        // echo "<br>Phone no:" . $mobile_no;
        // echo "<br>Blood Group" . $blood_group;
        // echo "<br>Address:" . $address;

        // echo "Name: $name" . "Phone number: $ph";

        $q = "INSERT INTO QuickMessage VALUES ('$name', '$mobile', '$email', '$message')";
        $query = mysqli_query($con,$q);

        if(isset($query)){
            include('campaigns.html');
        }
    }
?>

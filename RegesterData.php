<?php
    // Database connection settings
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blood'; 

    // Create a connection to the database and Check for connection errors
    $con = mysqli_connect($host, $user, $pass, $db) or die("Connection Fail..." . mysqli_error($con));


    // Query to retrieve data of Registers
    $query = "select * from register";

    $result = mysqli_query($con, $query);

    if($result){
        // Count the rows
        $totalRegisters = mysqli_num_rows($result);
    }

    echo "<table border='1'>";
    echo "<tr><th colspan='5'>Regestration Data</th></tr><tr><th colspan='5'>Number of Data Rows of Registers:".$totalRegisters."</th></tr>";
    echo "<tr><th>Name</th><th>Email</th><th>Mobile No.</th><th>Blood Group</th><th>Address</th></tr>";
    while($row = mysqli_fetch_array($result)){
        // echo "<br>";
        echo "<tr><td>" . $row['username'] ."</td><td>" . $row['email'] ."</td><td>" . $row['mobile_no'] ."</td><td>" . $row['blood_group'] . "</td><td>" . $row['address'] ."</td></tr>";
    }

    // Query to retrieve data of QuickMessage
    $query = "select * from QuickMessage";

    $result = mysqli_query($con, $query);

    if($result){
        // Count the rows
        $totalMessage = mysqli_num_rows($result);
    }

    echo "<table border='1'>";
    echo "<br><br><tr><th colspan='4'>Message Data</th></tr><tr><th colspan='5'>Number of Data Rows of Registers:".$totalMessage."</th></tr>";
    echo "<tr><th>Name</th><th>Mobile No.</th><th>Email</th><th>Message</th></tr>";
    while($row = mysqli_fetch_array($result)){
        // echo "<br>";
        echo "<tr><td>" . $row['name'] ."</td><td>" . $row['mobile'] ."</td><td>" . $row['email'] ."</td><td>" . $row['message'] ."</td></tr>";
    }

    // Close the database connection
    mysqli_close($con);
?>

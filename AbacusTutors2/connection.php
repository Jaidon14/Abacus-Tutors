<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "bayek.aserv.co.za";
$dbname = "abacumsm_abacus_database";
$dbusername = "abacumsm_admin";
$dbpassword = "cpulliah@123";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    
        // Prepare an SQL statement
        $sql = "INSERT INTO tutors (name, email, number) VALUES ('$name', '$email', '$number')";

        // Execute the query
        if($con->query($sql) === TRUE) {
            echo "Data successfully submitted! We will keep in touch 😊";
            header("Location: success.html"); // Redirect
            exit(); // Ensure no further code is executed after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        // Close the connection
        $con->close();
    }


?>




<?php

// Error reporting and display settings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Sanitize input to prevent SQL injection
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $subject = ($_POST['subject']);
    $assist = ($_POST['assist']);

    // Validate email (optional, depends on your requirements)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

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
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } else {
        // Prepare an SQL statement
        $stmt = $con->prepare("INSERT INTO assist (name, email, subject, assist) VALUES (?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $con->error);
        }

        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $subject, $assist);

        // Execute the query
        if ($stmt->execute()) {
            echo "Record inserted successfully.<br>";
            header("Location: success.html");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $con->close();
    }
} else {
    echo "Form not submitted correctly.";
}
?>

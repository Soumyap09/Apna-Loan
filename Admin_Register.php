<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve and trim form data
    
    $username = trim($_GET['username']);
    $password = trim($_GET['Password']);
    $first_name = trim($_GET['first_name']);
    $last_name = trim($_GET['last_name']);
    $designation = trim($_GET['designation']);

    // Prepare the SQL statement
    $sql = "INSERT INTO register (username, password, first_name, last_name, designation) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the SQL query
        $stmt->bind_param("sssss", $username, $password, $first_name, $last_name, $designation);

        // Execute the statement and check if successful
        if ($stmt->execute()) {
            header("Location:Register_successful.php");
            exit();
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
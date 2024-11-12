<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";



// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $username = trim($_POST["Username"]);
    $password = trim($_POST["Password"]);

    // SQL query with placeholders
    $sql = "SELECT * FROM employee WHERE Username = ? AND Password = ?";

    // Prepare the statement
    $entry = $conn->prepare($sql);
    
    // Bind parameters
    $entry->bind_param("ss", $username, $password);
    // Execute the statement
    $entry->execute();

    // Get the result
    $result = $entry->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        header("location:Product & Service/index.php");
    } 
    else {
        echo "Invalid username or password.";
        
    }

    
    // Close the statement
    $entry->close();
}

// Close the connection
$conn->close();
?>
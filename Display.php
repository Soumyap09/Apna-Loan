<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<table border="1">
            <tr>
                <th style="color:red; padding:10px">username</th>
                <th style="color:red; padding:10px">Password</th>
            </tr>
    <?php
// Step 1: Connect to the database
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

// Step 2: Execute the SQL query to select data
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

// Step 3: Display the data if there are results
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
       ?>
    <div class="container">
        
            <tr>
                <td><?php echo $row["Username"] ?></td>
                <td><?php echo $row["Password"] ?></td>
                
            </tr>
    </div>
    <?php }
} else {
    echo "0 results";
}

// Step 4: Close the connection
$conn->close();
?>

</table>

</body>

</html>
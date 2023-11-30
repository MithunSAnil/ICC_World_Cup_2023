<?php
// Fetch data based on filters and return as JSON

// Example: Connect to your database
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example: Fetch data based on filters
$country = $_GET['country'];
$runs = $_GET['runs'];
// Add more filter variables as needed

$sql = "SELECT * FROM your_table WHERE country = '$country' AND runs >= $runs";
// Add more conditions to the SQL query based on other filters

$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Return data as JSON
echo json_encode($data);
?>

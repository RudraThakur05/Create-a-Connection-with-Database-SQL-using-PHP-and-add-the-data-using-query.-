<?php
include 'connect.php';

// Data to insert
$name = "John Doe";
$email = "john@example.com";
$password = "123456";

// SQL query
$sql = "INSERT INTO users (name, email, password)
        VALUES ('$name', '$email', '$password')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

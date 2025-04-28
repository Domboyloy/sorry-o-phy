<?php
// Include database connection file
include('db.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security
    $email = $_POST['email'];

    // Create SQL query to insert the user into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "login");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Assuming S.NO is an auto-increment field, you don't need to insert it explicitly.

$Username = mysqli_real_escape_string($conn, $_REQUEST['username']); // Sanitize and escape user input
$password = mysqli_real_escape_string($conn, $_REQUEST['password']); // Sanitize and escape user input

// Use prepared statements to insert data
$sql = "INSERT INTO login (username, password) VALUES (?, ?)";

if ($stmt = mysqli_prepare($conn, $sql)) {
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ss", $Username, $password);

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Data stored in the database successfully</h3>";
    } else {
        echo "ERROR: Could not execute the query: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "ERROR: Could not prepare the query: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>

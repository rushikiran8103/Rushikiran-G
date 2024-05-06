<?php
// Assuming you have a database connection established
$connection = mysqli_connect('your_host', 'your_username', 'your_password', 'your_database_name');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform SQL query
$sql = "SELECT * FROM Users";
$result = mysqli_query($connection, $sql);

// Check if there are results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>User ID</th><th>Username</th><th>Email</th><th>Password Hash</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password_hash"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
mysqli_close($connection);
?>

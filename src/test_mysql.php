<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pls";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "$row['user_id']  $row['user_GUID'] $row['email'] $row['password'] $row['entry_date'] $row['status'] <br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
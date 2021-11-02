<?php

$host = "localhost";
$database = "test";
$username = "bagus";
$password = "Baguzt3aa";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed");
}

$sql = "SELECT * FROM product_admins";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product Name : " . $row['name'] . "<br>";
    }
}else {
    echo "0 results";
}

$conn->close();

?>
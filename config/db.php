<?php
$conn = mysqli_connect("localhost", "root", "", "database");

if (! $conn) {
    echo "MySQL'e bağlanılamadı: " . mysqli_connect_error();
}
?>
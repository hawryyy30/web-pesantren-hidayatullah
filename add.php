<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pesantren";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST["Nama"];
    $nis = $_POST["NIS"];
    $jenisKelamin = $_POST["JenisKelamin"];
    $alamat = $_POST["Alamat"];

    $sql = "INSERT INTO clients (Nama, NIS, JenisKelamin, Alamat) VALUES ('$nama', '$nis', '$jenisKelamin', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: namaSiswa.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
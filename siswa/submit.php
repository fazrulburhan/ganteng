<?php
include_once  "../connection.php";


$nama = $_POST['name'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$kelas_name = $_POST['kelas_name'];

$sql = "INSERT INTO siswa (nama, email, alamat, ttl, kelas_name)
VALUES ('".$nama."', '".$email."' , '".$ttl."', '".$alamat. "', '" . $kelas_name . "')";


if ($conn->query($sql) === TRUE) {
    header("Location: /siswa/");
    exit();
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
<?php
$sql = new mysqli("localhost", "root", "", "magang");

$id = $_GET['id'];
$sql->query("DELETE FROM kelas WHERE id = $id");
header("Location: index.php");
?>

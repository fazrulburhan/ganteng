<?php
$sql = new mysqli("localhost", "root", "", "magang");

$id = $_GET['id'];
$result = $sql->query("SELECT * FROM kelas WHERE id = $id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_kelas = $_POST['nama_kelas'];
    $jenjang = $_POST['jenhang'];
    $kapasitas = $_POST['kapasitas'];

    $mysqli->query("UPDATE kelas SET nama_kelas='$nama_kelas', jenjang='$jenjang', kapasitas='$kapasitas' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label>nama_kelas</label>
                <input type="text" class="form-control" name="nama_kelas" value="<?= $data['nama_kelas'] ?>" required>
            </div>
            <div class="form-group">
                <label>jenjang</label>
                <input type="text" class="form-control" name="jenjang" value="<?= $data['jenjang'] ?>" required>
            </div>
            <div class="form-group">
                <label>kapasitas</label>
                <input type="text" class="form-control" name="kapasitas" value="<?= $data['kapasitas'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
   
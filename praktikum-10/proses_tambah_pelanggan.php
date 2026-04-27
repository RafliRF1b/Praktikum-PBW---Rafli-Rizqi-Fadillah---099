<?php
include 'koneksi_db.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

$stmt = $conn->prepare("INSERT INTO pelanggan (Nama, Alamat, Email, Telepon) VALUES (?, ?, ?, ?)");

if (!$stmt) {
    die("Query error: " . $conn->error);
}

$stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='data_pelanggan.php';</script>";
} else {
    echo "Gagal: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

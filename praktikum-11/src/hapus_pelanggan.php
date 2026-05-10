<?php
include 'koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus'); window.location='data_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='data_pelanggan.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
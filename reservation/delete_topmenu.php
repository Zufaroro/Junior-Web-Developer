<?php

include("koneksi.php");

$id = $_GET['idx'];

$sql = "DELETE FROM pesanan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("location:reservation.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
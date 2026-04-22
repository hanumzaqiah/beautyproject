<?php
include 'koneksi.php';

if ($conn) {
    echo "DB CONNECTED";
} else {
    echo "DB ERROR";
}
?>
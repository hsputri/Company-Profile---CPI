<?php
include 'koneksi.php';

// ambil semua data product
$products = mysqli_query($conn, "SELECT * from products WHERE publish = 1");

// ambil semua data article
$articles = mysqli_query($conn, "SELECT * from article WHERE publish = 1");

// ambil semua data article
$services = mysqli_query($conn, "SELECT * from services WHERE publish = 1");


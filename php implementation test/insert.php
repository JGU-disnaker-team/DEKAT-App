<?php
$koneksi = mysqli_connect("localhost", "root", "", "testdb");

$name = $_POST('name');
$email = $_POST('email');
$submit = $_POST('submit');

$query = "INSERT INTO users VALUES ('$name', '$email', '$submit')";

mysqli_query($koneksi, $query);
?>
<?php
$nama = "Arenta Putri Maharani";
$email = "arenta@example.com";

setcookie("nama", $nama, time() + (86400 * 30), "/"); 
setcookie("email", $email, time() + (86400 * 30), "/");

echo "Data identitas Anda telah disimpan dalam cookies.";

if(isset($_COOKIE['nama']) && isset($_COOKIE['email'])) {
    $nama = $_COOKIE['nama'];
    $email = $_COOKIE['email'];
    echo "<br>Nama: $nama <br>Email: $email";
} else {
    echo "<br>Data identitas tidak ditemukan dalam cookies.";
}
?>

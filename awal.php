<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Halo " . $nama;
} else {
    echo "Nama Naimah";
}
?>

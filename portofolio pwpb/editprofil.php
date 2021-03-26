<?php
include 'koneksi.php';

if (isset($_POST['simpanedit'])) {
    $id = $_POST['id'];
    $gambar_profil = $_POST['gambar_profil'];
    $nama_profil = $_POST['nama_profil'];
    $isi_profil = $_POST['isi_profil'];
    


    $sql = "UPDATE profil SET gambar_profil='$gambar_profil', nama_profil='$nama_profil', isi_profil='$isi_profil' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editprofil.php?status=gagal');
    } 
}
?>
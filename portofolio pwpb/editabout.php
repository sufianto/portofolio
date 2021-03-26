<?php
include 'koneksi.php';

if (isset($_POST['simpanedit'])) {
    $id = $_POST['id'];
    $isi1 = $_POST['isi1'];
    $isi2 = $_POST['isi2'];
    


    $sql = "UPDATE about SET isi1='$isi1', isi2='$isi2' WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editabout.php?status=gagal');
    } 
}
?>
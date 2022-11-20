<?php
include 'koneksi.php';
$ID = $_GET['id'];
$del = "DELETE FROM pasien where NomorP='$ID'";
$del_query = mysqli_query($koneksi,$del);

if ($del_query){
    echo " Data Berhasil Dihapus";

}else{
    echo "Data Gagal Dihapus";
}


?>
<?php 
require '../system/functions.php';
require '../system/Kelas.php';
$id_kelas = $_GET['id_kelas'];
$kelas = new Kelas;

if($kelas->hapus($id_kelas) > 0){
    header("Location:tabel.php");
}else{
    echo"<script>
    alert('Data gagal dihapus');
    document.location.href = 'tabel.php';
</script>";
}


?>


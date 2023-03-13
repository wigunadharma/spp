<?php
require '../system/functions.php';
include '../system/Kelas.php';
session_start();
include '../templates/header.php';


if($_SESSION['level']==""){
header("Location:../login.php");
die;
}
// Tambah Data
$kelas = new Kelas();
if(isset($_POST["tambah"])){
  if($kelas->tambah($_POST) >0 ) {

    echo"
    <script>
      alert('Data Berhasil ditambahkan');
    </script>";

    header("Location:tabel.php");

  }else{
    echo"
    <script>
      alert('Data gagal ditambahkan');
      document.location.href = 'tabel.php';
    </script>";
  }


}

?>
<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <?php include '../templates/partials/sidebar.php';?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <?php include '../templates/partials/navbar.php'?>
      
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex ualign-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Kelas</h1>
         
        </div>

        <!-- Content Row -->
       <div class="row">
        <div class="col-12">
            <form action="" method="post">
              <div class="form-group">
                <label for="namakelas">Nama Kelas</label>
                <input type="text" class ="form-control" id="namakelas" name="nama_kelas">
              </div>
              <div class="form-group">
                <label for="kompetensi">Kompetensi Keahlian</label>
                <input type="text" class ="form-control" id="kompetensi" name="kompetensi_keahlian">
              </div>
              <div class="form-group">
            <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
              </div>

            </form>
        </div>
       </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
<!-- Footer -->
<?php include '../templates/partials/footer.php';?>
<!-- end footer -->
   
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>




<?php include '../templates/footer.php';?>
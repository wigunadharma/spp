<?php
require '../system/functions.php';
require '../system/Kelas.php';
session_start();

?>

<?php include '../templates/header.php';

$siswadetail = query("SELECT siswa.id_siswa, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.nama_kelas, kelas.kompetensi_keahlian, pengguna.username, pengguna.password,  pembayaran.tahun_ajaran, pembayaran.nominal FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas INNER JOIN pengguna ON siswa.id_pengguna = pengguna.id_pengguna INNER JOIN pembayaran ON siswa.id_pembayaran = pembayaran.id_pembayaran where id_siswa= {$_GET['id_siswa']}")[0];



?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include '../templates/partials/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include '../templates/partials/navbar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a href="tabel.php" class="btn btn-primary mb-3">Kembali</a>
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800 mb-4">Detail Siswa</h1>
                <div class="row">
                    <div class="col-6">
                        <p>NISN : <?= $siswadetail['nisn']; ?></p>
                        <p>Nama : <?= $siswadetail['nama']; ?></p>
                        <p>Alamat : <?= $siswadetail['alamat']; ?></p>
                        <p>Kompetensi Keahlian : <?= $siswadetail['kompetensi_keahlian']; ?></p>
                    </div>
                    <div class="col-6">
                        <p> NIS: <?= $siswadetail['nis']; ?></p>
                        <p> Kelas : <?= $siswadetail['nama_kelas']; ?></p>
                        <p>Telepon : <?= $siswadetail['telepon']; ?></p>
                        <p>Tahun_ajaran : <?= $siswadetail['tahun_ajaran']; ?></p>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include '../templates/partials/footer.php'; ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
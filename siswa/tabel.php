<?php
require '../system/functions.php';
require '../system/Kelas.php';
session_start();

?>

<?php include '../templates/header.php';



$siswa = query("SELECT siswa.id_siswa, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.nama_kelas, kelas.kompetensi_keahlian, pengguna.username, pengguna.password,  pembayaran.tahun_ajaran, pembayaran.nominal FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas INNER JOIN pengguna ON siswa.id_pengguna = pengguna.id_pengguna INNER JOIN pembayaran ON siswa.id_pembayaran = pembayaran.id_pembayaran");

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

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data kelas</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">kelas</h6>
                    </div>

                    <div class="card-body">
                        <div class="table">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><a href="<?= BASEURL; ?>/kelas/tambah.php"><i class="fas fa-plus"></i></a></th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Tahun Ajaran</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($siswa as $row) : ?>
                                        <tr>
                                            <td>
                                                <a href="<?= BASEURL; ?>/siswa/detail.php?id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-success "><i class="fas fa-book"></i></a>
                                                <a href="<?= BASEURL; ?>/siswa/edit.php?id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="<?= BASEURL; ?>/siswa/hapus.php?id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-danger "><i class="fas fa-trash"></i></a>
                                            </td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['nama_kelas'] ?> </td>
                                            <td><?= $row['tahun_ajaran'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
<?php 
// require 'system/functions.php';
?>


<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" st>

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">e-spepe</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    

    <!-- Heading -->
    <div class="sidebar-heading">
        History
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/history.php">
            <i class="fas fa-fw fa-file"></i>
            <span>history</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <!-- Nav Item - transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        Tabel
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabel</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tabel :</h6>
                <?php if($_SESSION['level'] == 1) :?>
                    <a class="collapse-item"  href="login.html">Tabel Siswa</a>
                    <a class="collapse-item" href="forgot-password.html">Tabel Pembayaran</a>
                    <a class="collapse-item" href="forgot-password.html">Tabel Petugas</a>
                <?php endif ?>
                    <a class="collapse-item" href="<?= BASEURL; ?>/kelas/tabel.php">Tabel Kelas</a>
        </div>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Report
    </div>

    <!-- Nav Item - transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="far fa-fw fa-folder"></i>
            <span>Generate Report</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
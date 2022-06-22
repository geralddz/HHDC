 <?php 
 include('connect.php');
  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $ro=mysqli_fetch_array($result);

 ?>


<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
<ul class="pcoded-item pcoded-left-item">
<li class="">
<a href="index.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
</li>

<?php if(($_SESSION['user'] == 'admin') || ($_SESSION['user'] == 'doctor') || ($_SESSION['user'] == 'patient')){ ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
        <span class="pcoded-mtext">Janji Temu</span>
    </a>
    <ul class="pcoded-submenu">
    <?php if(($_SESSION['user'] == 'admin') || ($_SESSION['user'] == 'patient')) { ?>
        <li class="">
            <a href="appointment.php">
                <span class="pcoded-mtext">Tambah Janji Temu</span>
            </a>
        </li>
    <?php } ?>
    <?php if(($_SESSION['user'] == 'admin') || ($_SESSION['user'] == 'doctor')) { ?>
        <li class="">
            <a href="view-pending-appointment.php">
                <span class="pcoded-mtext">Lihat Janji Temu Tertunda</span>
            </a>
        </li>
        <li class="">
            <a href="view-appointments-approved.php">
                <span class="pcoded-mtext">Lihat Janji Temu yang disetujui</span>
            </a>
        </li>
    <?php } ?>
    <?php if($_SESSION['user'] == 'patient') { ?>
        <li class="">
            <a href="view-appointments.php">
                <span class="pcoded-mtext">Lihat Janji Temu</span>
            </a>
        </li>
    <?php } ?>
    </ul>
</li>
<?php } ?>

<?php if($_SESSION['user'] == 'admin') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
        <span class="pcoded-mtext">Dokter</span>
    </a>
    <ul class="pcoded-submenu">
   
        <li class="">
            <a href="doctor.php">
                <span class="pcoded-mtext">Tambah Dokter</span>
            </a>
        </li>

        <li class="">
            <a href="view-doctor.php">
                <span class="pcoded-mtext">Lihat Dokter</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>

<?php if($_SESSION['user'] == 'doctor') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
        <span class="pcoded-mtext">Dokter</span>
    </a>
    <ul class="pcoded-submenu">
   
        <li class="">
            <a href="visiting-hour.php">
                <span class="pcoded-mtext">Tambah Jam Kunjung</span>
            </a>
        </li>

        <li class="">
            <a href="view-visiting-hour.php">
                <span class="pcoded-mtext">Lihat Jam Kunjung</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>

<?php if($_SESSION['user'] == 'patient') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
        <span class="pcoded-mtext">Resep</span>
    </a>
    <ul class="pcoded-submenu">
   
        <li class="">
            <a href="view-prescription.php">
                <span class="pcoded-mtext">Lihat Data Resep</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>


<?php if($_SESSION['user'] == 'patient') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
        <span class="pcoded-mtext">Perawatan</span>
    </a>
    <ul class="pcoded-submenu">
   
        <li class="">
            <a href="view-treatment-record.php">
                <span class="pcoded-mtext">Lihat Data Perawatan</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>

<?php if(($_SESSION['user'] == 'admin') || ($_SESSION['user'] == 'doctor')) { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
        <span class="pcoded-mtext">Pasien</span>
    </a>
    <ul class="pcoded-submenu">
    <?php if($_SESSION['user'] == 'admin') { ?>
        <li class="">
            <a href="patient.php">
                <span class="pcoded-mtext">Tambah Pasien</span>
            </a>
        </li>
    <?php } ?>
        <li class="">
            <a href="view-patient.php">
                <span class="pcoded-mtext">Lihat Pasien</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>


<?php if($_SESSION['user'] == 'doctor') { ?>
<li>
    <a href="income-report.php">
        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
        <span class="pcoded-mtext">Laporan Pemasukan</span>
    </a>
</li>
<?php } ?>

<?php if($_SESSION['user'] == 'admin') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
        <span class="pcoded-mtext">Layanan</span>
    </a>
    <ul class="pcoded-submenu">
   
        <li class="">
            <a href="department.php">
                <span class="pcoded-mtext">Tambah Departemen</span>
            </a>
        </li>

        <li class="">
            <a href="view-department.php">
                <span class="pcoded-mtext">Lihat Departmen</span>
            </a>
        </li>

        <li class="">
            <a href="treatment.php">
                <span class="pcoded-mtext">Tambah Tipe Perawatan</span>
            </a>
        </li>

        <li class="">
            <a href="view-treatment.php">
                <span class="pcoded-mtext">Lihat Tipe Perawatan</span>
            </a>
        </li>

        <li class="">
            <a href="medicine.php">
                <span class="pcoded-mtext">Tambah Obat</span>
            </a>
        </li>

        <li class="">
            <a href="view-medicine.php">
                <span class="pcoded-mtext">Lihat Obat</span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>

<?php if($_SESSION['user'] == 'doctor') { ?>
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)">
        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
        <span class="pcoded-mtext">Layanan</span>
    </a>
    <ul class="pcoded-submenu">
        <li class="">
            <a href="view-treatment-record.php">
                <span class="pcoded-mtext">Lihat Data Perawatan </span>
            </a>
        </li>

        <li class="">
            <a href="view-treatment.php">
                <span class="pcoded-mtext">Lihat Perawatan </span>
            </a>
        </li>
    </ul>
</li>
<?php } ?>

<!-- <li class="">
<a href="setting.php">
<span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
<span class="pcoded-mtext">Settings</span>
</a>
</li> -->

<li>
<a href="logout.php">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</nav>


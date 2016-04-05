<?php

include('../../../bootstrap/bootstrap.php');
include($controller_path . 'Doctor/DoctorController.php');

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jabatan = $_POST['jabatan'];

$doctor = new DoctorController();
$doctor->create($nama, $umur, $jabatan);

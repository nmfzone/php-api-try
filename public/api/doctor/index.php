<?php

include('../../../bootstrap/bootstrap.php');
include($controller_path . 'Doctor/DoctorController.php');


$doctor = new DoctorController();
$doctor->index();

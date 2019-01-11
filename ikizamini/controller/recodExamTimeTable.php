<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 15:39
 */
include '../include/timeTable.php';
$timetable = new timeTable();
$from = $_POST['from'];
$to = $_POST['to'];
$site = $_POST['site'];
$examtype = $_POST['examtype'];
$duration = $_POST['duration'];
$termRegistration = $_POST['term'];


if (!empty($from) && !empty($to) && !empty($site) && !empty($examtype) && !empty($duration) && !empty($termRegistration)){
    echo "byose".$from."  ".$to." ".$site." ".$examtype." ".$duration." ".$termRegistration;
}



?>
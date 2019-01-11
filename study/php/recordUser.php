<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 24/12/2018
 * Time: 12:41
 */
include 'user.php';

$student = new user();

$first = $_POST['fname'];
$last = $_POST ['lname'];
$uname = $_POST['uname'];
$pass = $_POST['pword'];
$createdDate = date("Y-m-d h:i:s");
if(!empty($first) && !empty($last) && !empty($uname) && !empty($pass)){
    $student->setFirstName($first);
    $student->setLastName($last);
    $student->setUserName($uname);
    $student->setPassword($pass);
    $student->setCreatedDate($createdDate);
    $query = $student->createUser();
    if ($query){
        $message = "success";
        $status =1;
    }
    else{
        $message="failed";
        $status=0;
    }
}
else{
    $message="no field would be left empty";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
?>
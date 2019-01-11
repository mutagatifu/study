<?php
include 'user.php';

$user = new user();
$users = array();
$query = $user->getAll();
foreach ($query as $rows){
    $users[]=$rows;
}
$returnJS = array('status'=>1,'message'=>"success",'data'=>$users);
echo json_encode($returnJS);
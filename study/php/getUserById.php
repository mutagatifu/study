<?php
include 'user.php';
$user = new user();
$id = $_POST['id'];
$user->setId($id);
$users=array();
$query = $user->getUserById();

foreach ($query as $rows){
    $users[]=$rows;
}
//$returnJS=array('status'=>1,'message'=>"success",'data'=>$users);
echo json_encode($users);
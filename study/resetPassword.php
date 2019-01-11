<?php
include '../include/admin.php';

$admin = new admin();
$password = $_POST['password'];
$pword = MD5($password);
$email = $_POST['emails'];

if (!empty($password) && !empty($email)){
    $admin->setEmails($email);
    $admin->setPassword($pword);
    $query = $admin->resetPassword();
    if ($query){
        $message = "success and now your new password is: ".$password;
        $status=1;
    }
    else{
        $message = "failed";
        $status=0;
    }
}
else{
    $message = "no field would be left empty";
    $status=0;
}
$returnJs=array('status'=>$status,'message'=>$message);
echo json_encode($returnJs);
?>
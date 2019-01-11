<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 24/12/2018
 * Time: 16:32
 */
include 'user.php';
$user = new user();
$id = $_GET['id'];
if(!empty($id)){
    $user->setId($id);

    $query = $user->deleteUser();
    if ($query){
        ?>
        <script type="text/javascript">
                alert("successfully deleted");
                window.location.href="../index.html";
        </script>
    
        <?php
    }
    else{
        $message = "failed";
        $status=0;
    }
}
else{
    $message="specify the data to be modified";
    $status=0;
}
$returnJS=array('status'=>$status,'message'=>$message);
echo json_encode($returnJS);
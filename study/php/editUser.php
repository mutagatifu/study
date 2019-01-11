<?php
include 'user.php';


$student = new user();
$userId=$_POST['id'];
$first = $_POST['fname'];
$last = $_POST ['lname'];
$uname = $_POST['uname'];
$pass = $_POST['pword'];
$update = date("Y-m-d h:i:s");
if(!empty($first) && !empty($last) && !empty($uname) && !empty($pass)){

	// echo "byose ni".$userId." ".$first." ".$last." ".$uname." ".$pass." ".$update;
	$student->setId($userId);
	$student->setFirstName($first);
    $student->setLastName($last);
    $student->setUserName($uname);
    $student->setPassword($pass);

    $query = $student->updateUser($update);
    if ($query) {
    	?>
    	<script type="text/javascript">
    			alert("successfully updated");
    			window.location.href="../index.html";
    	</script>
    
    	<?php
    	// header("location:../index.html");
    }
    else{
    	echo "no update is made";
    }
}
else{
	echo "no thing came";
}

?>
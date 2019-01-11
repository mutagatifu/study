<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/12/2018
 * Time: 14:28
 */
include '../include/student.php';
$student = new Student();
$regId = $_POST['registrationId'];
$students = array();
if (!empty($regId)){
    $student->setRegId($regId);
    $query = $student->returnstudentsInfo();
    $count = mysqli_num_rows($query);

    if ($count > 0){
        $status=1;
        $message="success";
        foreach ($query as $rows){
            $students[]=$rows;
        }
    }
    else {
        $status = 0;
        $message = "no data returned";
        $students[] = 0;
    }
}
else{
    $status=0;
    $message="specify the student to view";
}
$returnJs=array('status'=>$status,'message'=>$message,'data'=>$students);
echo json_encode($returnJs);

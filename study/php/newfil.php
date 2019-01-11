<?php
class essay{
    private $emails;
    /**
     * @return mixed
     */
    public function getEmails()
    {
        return $this->emails;
    }
    /**
     * @param mixed $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }
    public function encrtpt(){
        return MD5($this->emails);
    }
    public function validatEmail($email){
        //return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
        return filter_var($email,FILTER_VALIDATE_EMAIL) ? TRUE : FALSE;
}
        //return filter_var($email,FILTER_VALIDATE_EMAIL) ? TRUE : FALSE;
    }
$ess = new essay();
$ass="karaharig@gmail.com";
$res = $ess->validatEmail($ass);
if ($res){
    //echo  $res."nothing is wrong";
    $ess ->setEmails($ass);
}
else {
    echo $res."Email is wrong";
}
echo $ess->getEmails()."</br>";
echo $ess->encrtpt($ass);
//dc9284bea8079f3e43999c3438ec20d4
?>


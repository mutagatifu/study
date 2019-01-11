<?php
include 'dbconnection.php';
 class user extends DbConnection{
     private $id;
     private $firstName;
     private $lastName;
     private $userName;
     private $password;
     private $createdDate;

     /**
      * @return mixed
      */
     public function getCreatedDate()
     {
         return $this->createdDate;
     }

     /**
      * @param mixed $createdDate
      */
     public function setCreatedDate($createdDate)
     {
         $this->createdDate = $createdDate;
     }


     /**
      * @return mixed
      */
     public function getUserName()
     {
         return $this->userName;
     }

     /**
      * @param mixed $userName
      */
     public function setUserName($userName)
     {
         $this->userName = $userName;
     }

     /**
      * @return mixed
      */
     public function getPassword()
     {
         return $this->password;
     }

     /**
      * @param mixed $password
      */
     public function setPassword($password)
     {
         $this->password = $password;
     }

     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return mixed
      */
     public function getFirstName()
     {
         return $this->firstName;
     }

     /**
      * @param mixed $firstName
      */
     public function setFirstName($firstName)
     {
         $this->firstName = $firstName;
     }

     /**
      * @return mixed
      */
     public function getLastName()
     {
         return $this->lastName;
     }

     /**
      * @param mixed $lastName
      */
     public function setLastName($lastName)
     {
         $this->lastName = $lastName;
     }
public function createUser(){
         $query = $this->connection->query("INSERT INTO `user`(`first_name`, `last_name`, `user_name`, `password`, `create_date`) 
                                                  VALUES ('$this->firstName','$this->lastName','$this->userName','$this->password','$this->createdDate')");
         if ($query){
             return $query;
         }
         else{
             return $query.mysqli_error($this->connection);
         }
}
public function getAll(){
         $query = $this->connection->query("select * from user");
         return $query;
}

public function deleteUser(){
         $query = $this->connection->query("DELETE FROM user WHERE id='$this->id'");
         return $query;
}
     public function getUserById(){
         $query = $this->connection->query("select * from user where id='$this->id'");
         return $query;
     }

     /*update user details*/

     public function updateUser($update){
      
      $query = $this->connection->query("UPDATE `user` SET `first_name`='$this->firstName',`last_name`='$this->lastName',
        `user_name`='$this->userName',`password`='$this->password',`update_date`='$update' WHERE `id`='$this->id'");

      return $query;
     }

 }


?>
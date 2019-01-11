<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 04/01/2019
 * Time: 09:39
 */
include "dbconnection.php";
class WaterOrder extends DbConnection
{
    private $id;
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

    public function returnCount($count){
        return mysqli_num_rows($count);
    }
/*get all water orders*/
    public function getAllWaterOrder(){
        $query = $this->connection->query("SELECT * FROM water_orders");
        return $query;
    }
}
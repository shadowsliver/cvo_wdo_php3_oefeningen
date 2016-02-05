<?php

class DBConn
{

    private $user;
    private $password;
    private $databaseName;
    private $conn;

    public function __construct($user, $password, $databaseName)
    {
        $this->user = $user;
        $this->password = $password;
        $this->databaseName = $databaseName;
        $this->CreateConnection();
    }

    private function CreateConnection()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=$this->databaseName", $this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // geeft fouten in sql weer
    }

    public function GetProduct()
    {
        $sql = "SELECT * FROM oneplusone WHERE product_id=1";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $product = $statement-> fetchObject();

        return $product;
    }

    public function UpdateProduct($input){
        if($input == "yes"){
            $sql="UPDATE oneplusone SET product_bought = product_bought + 1 WHERE product_id=1";
        }else if($input == 'no'){
            $sql="UPDATE oneplusone SET product_bought = product_bought - 1 WHERE product_id=1";
        }
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    }

}
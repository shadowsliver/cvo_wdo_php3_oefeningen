<?php
include_once './model/DBConn.php';
include_once './model/Properties.php';

class StockManagementController
{
    public $product;
    public $properties;

    public function __construct()
    {
        $this->product = new DBConn("shadow1q_dev", "Shadow2401", "shadow1q_devstock");
        //$this->product = new DBConn("root", "root", "vooraad");
        $this->properties = new Properties("nl", "Stock Management");
        $this->handler();
    }

    public function handler(){
        $isChangeSubmitted = isset($_POST['keuze']);
        if($isChangeSubmitted){
            $this->product->UpdateProduct($_POST['keuze']);
        }
    }
}
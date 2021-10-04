<?php
class ProductStock
{
    public $psid,$name,$color;

    public function __construct($psid,$name,$color)
    {
        $this->psid = $psid;
        $this->name = $name;
        $this->color = $color;
    }

    public static function getAll()
    {
        $productstockList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM PROD_STOCK NATURAL JOIN COLOR NATURAL JOIN PRODUCT";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $psid = $my_row["PRODSTOCK_ID"];
            $name = $my_row["PROD_Name"];
            $color = $my_row["Color_Name"];
            $productstockList[] = new ProductStock($psid,$name,$color);
        }
        require("connection_close.php");
        return $productstockList;
    }
}
?>
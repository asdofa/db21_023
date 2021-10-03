<?php
    class Product
    {
        public $PROD_ID;
        public $PROD_Name;
        public $PROD_QTY;
        public $PROD_Category;
        public $PROD_Type;
        public $PROD_Minimum;
        public $PROD_Detail;
        public function __construct($PROD_ID,$PROD_QTY,$PROD_Name,$PROD_Category,$PROD_Type,$PROD_Minimum,$PROD_Detail)
        {
            $this->PROD_ID = $PROD_ID;
            $this->PROD_Name = $PROD_Name;
            $this->$PROD_QTY = $PROD_QTY;
            $this->PROD_Category = $PROD_Category;
            $this->PROD_Type = $PROD_Type;
            $this->PROD_Minimum = $PROD_Minimum;
            $this->PROD_Detail = $PROD_Detail;
        }
        public static function getAll()
        {
            $productList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM PRODUCT";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $PROD_ID=$my_row["PROD_ID"];
                $PROD_Name=$my_row["PROD_Name"];
                $PROD_QTY = $my_row["PROD_QTY"];
                $PROD_Category=$my_row["PROD_Category"];
                $PROD_Type=$my_row["PROD_Type"];
                $PROD_Minimum=$my_row["PROD_Minimum"];
                $PROD_Detail=$my_row["PROD_Detail"];
                $productList[]=new Product($PROD_ID,$PROD_QTY,$PROD_Name,$PROD_Category,$PROD_Type,$PROD_Minimum,$PROD_Detail);
            }
            require("connection_close.php");

            return $productList;
        }
    }
?>
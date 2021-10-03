<?php
    class Rate
    {
        public $PROD_ID;
        public $PROD_Name;
        public $PROD_Category;
        public $PROD_Type;
        public $PROD_Minimum;
        public $PROD_Detail;
        public $PROD_QTY;
        public $PROD_Price;
        public $PROD_SCPrice;
        public $QTY_Rate;
        public function __construct($PROD_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate)
        {
            $this->PROD_ID = $PROD_ID;
            $this->PROD_QTY = $PROD_QTY;
            $this->PROD_Price = $PROD_Price;
            $this->PROD_SCPrice = $PROD_SCPrice;
            $this->QTY_Rate = $QTY_Rate;
        }
        public static function getAll()
        {
            $rateList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM RATE";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $PROD_ID=$my_row["PROD_ID"];
                $PROD_QTY=$my_row["PROD_QTY"];
                $PROD_Price=$my_row["PROD_Price"];
                $PROD_SCPrice=$my_row["PROD_SCPrice"];
                $QTY_Rate=$my_row["QTY_Rate"];
                $rateList[]=new RATE($PROD_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
            }
            require("connection_close.php");
            
            return $rateList;
        }
        public static function search($key)
        {
            require("connection_connec.php");
            $sql = "select * from PRODUCT NATURAL JOIN RATE WHERE PROD_ID LIKE '%$key%' or PROD_Name LIKE '%$key%' 
            or PROD_Category LIKE '%$key%' or PROD_Type LIKE '%$key%' or PROD_Minimum LIKE '%$key%' or PROD_Detail LIKE '%$key%' 
            or PROD_QTY LIKE '%$key%' or PROD_Price LIKE '%$key%' or PROD_SCPrice LIKE '%$key%' or QTY_Rate LIKE '%$key%' "
            $result = conn->query($sql);
            while ($my_row = $result->fetch_assocc()) 
            {
                $PROD_ID=$my_row["PROD_ID"];
                $PROD_Name=$my_row["PROD_Name"];
                $PROD_Category=$my_row["PROD_Category"];
                $PROD_Type=$my_row["PROD_Type"];
                $PROD_Minimum=$my_row["PROD_Minimum"];
                $PROD_Detail=$my_row["PROD_Detail"];
                $PROD_QTY=$my_row["PROD_QTY"];
                $PROD_Price=$my_row["PROD_Price"];
                $PROD_SCPrice=$my_row["PROD_SCPrice"];
                $QTY_Rate=$my_row["QTY_Rate"];
                $rateList[]=new RATE($PROD_ID,$PROD_Name,$PROD_Category,$PROD_Type,$PROD_Minimum,$PROD_Detail,
                $PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
            }
            require("connection_close.php");

            return $rateList;
        }
        
    }
?>
<?php
    class Rate
    {
        public $PROD_ID;
        public $PROD_Name;
        public $RATE_ID;
        public $PROD_QTY;
        public $PROD_Price;
        public $PROD_SCPrice;
        public $QTY_Rate;
        public function __construct($PROD_ID,$PROD_Name,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate)
        {
            $this->PROD_ID = $PROD_ID;
            $this->PROD_Name = $PROD_Name;
            $this->RATE_ID = $RATE_ID;
            $this->PROD_QTY = $PROD_QTY;
            $this->PROD_Price = $PROD_Price;
            $this->PROD_SCPrice = $PROD_SCPrice;
            $this->QTY_Rate = $QTY_Rate;
        }
        public static function getAll()
        {
            $rateList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM RATE NATURAL JOIN PRODUCT ";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $PROD_ID = $my_row[PROD_ID];
                $PROD_Name = $my_row[PROD_Name];
                $RATE_ID = $my_row[RATE_ID];
                $PROD_QTY = $my_row[PROD_QTY];
                $PROD_Price = $my_row[PROD_Price];
                $PROD_SCPrice = $my_row[PROD_SCPrice];
                $QTY_Rate = $my_row[QTY_Rate];
                $rateList[] = new RATE($PROD_ID,$PROD_Name,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
            }
            require("connection_close.php");
            
            return $rateList;
        }
        public static function search($key)
        {
            require("connection_connec.php");
            $sql = "select * from PRODUCT NATURAL JOIN RATE WHERE PROD_ID LIKE '%$key%' or PROD_Name LIKE '%$key%' 
            or PROD_Category LIKE '%$key%' or PROD_Type LIKE '%$key%' or PROD_Minimum LIKE '%$key%' or PROD_Detail LIKE '%$key%' 
            or RATE_ID LIKE '%$key%' or PROD_QTY LIKE '%$key%' or PROD_Price LIKE '%$key%' or PROD_SCPrice LIKE '%$key%' or QTY_Rate LIKE '%$key%' ";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $PROD_ID = $my_row[PROD_ID];
                $PROD_Name = $my_row[PROD_Name];
                $RATE_ID = $my_row[RATE_ID];
                $PROD_QTY = $my_row[PROD_QTY];
                $PROD_Price = $my_row[PROD_Price];
                $PROD_SCPrice = $my_row[PROD_SCPrice];
                $QTY_Rate = $my_row[QTY_Rate];
                $rateList[] = new RATE($PROD_ID,$PROD_Name,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
            }
            require("connection_close.php");

            return $rateList;
        }
        public static function get($RATE_ID)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM RATE NATURAL JOIN PRODUCT WHERE PRI_ID = '$RATE_ID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $PROD_ID = $my_row[PROD_ID];
            $PROD_Name = $my_row[PROD_Name];
            $RATE_ID = $my_row[RATE_ID];
            $PROD_QTY = $my_row[PROD_QTY];
            $PROD_Price = $my_row[PROD_Price];
            $PROD_SCPrice = $my_row[PROD_SCPrice];
            $QTY_Rate = $my_row[QTY_Rate];
            require(" connection_close.php");
            return new Rate($PROD_ID,$PROD_Name,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);

        }
        
        public static function add($PROD_ID,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate)
        {
            require("connection_connect.php");
            $sql = "insert into RATE(PROD_ID,RATE_ID,PROD_QTY,PROD_Price,PROD_SCPrice,QTY_Rate) 
            values ('$PROD_ID','$RATE_ID','$PROD_QTY','$PROD_Price','$PROD_SCPrice','$QTY_Rate')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return("add success $result row");
        }
        public static function update($PROD_ID,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate)
        {
            require("connection_connect.php");
            $sql = "UPDATE RATE SET PROD_ID = '$PROD_ID' ,PROD_QTY = '$PROD_QTY' ,PROD_Price = '$PROD_Price' 
            ,PROD_SCPrice = '$PROD_SCPrice' ,QTY_Rate = '$QTY_Rate' WHERE RATE_ID = '$RATE_ID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return("update success $result row");
        }
        public static function delete($id)
        {
            require("connection_connect.php");
            $sql = "Delete from RATE WHERE RATE_ID = '$RATE_ID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return("update success $result row");
        }
    }
?>
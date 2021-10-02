<?php
    class Rate{
        public $PROD_ID;
        public $PROD_QTY;
        public $PROD_Price;
        public $PROD_SCPrice;
        public $QTY_Rate;
        public function __construct($PROD_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate){
            $this->PROD_ID = $PROD_ID;
            $this->PROD_QTY = $PROD_QTY;
            $this->PROD_Price = $PROD_Price;
            $this->PROD_SCPrice = $PROD_SCPrice;
            $this->QTY_Rate = $QTY_Rate;
        }
        public static function getAll(){
            $rateList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM RATE";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
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
    }
?>
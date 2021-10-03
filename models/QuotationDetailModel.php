<?php
class QuotationDetail
{
    public $QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name;

    public function __construct($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name)
    {
        $this->QD_ID = $QD_ID;
        $this->QUO_ID = $QUO_ID;
        $this->PRODSTOCK_ID = $PRODSTOCK_ID;
        $this->QD_QTY = $QD_QTY;
        $this->QD_ColorQTY = $QD_ColorQTY;

        $this->PROD_ID = $PROD_ID;
        $this->PROD_Name = $PROD_Name;
        $this->Color_ID = $Color_ID;
        $this->Color_Name = $Color_Name;
    }

    public static function getAll()
    {
        $QuotationDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM QUO_DETAIL NATURAL JOIN QUOTATION NATURAL JOIN PROD_STOCK NATURAL JOIN COLOR NATURAL JOIN PRODUCT";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $QD_ID = $my_row["QD_ID"];
            $QUO_ID = $my_row["QUO_ID"];
            $PRODSTOCK_ID = $my_row["PRODSTOCK_ID"];
            $QD_QTY = $my_row["QD_QTY"];
            $QD_ColorQTY = $my_row["QD_ColorQTY"];
    
            $PROD_ID = $my_row["PROD_ID"];
            $PROD_Name = $my_row["PROD_Name"];
            $Color_ID = $my_row["Color_ID"];
            $Color_Name = $my_row["Color_Name"];

            $QuotationDetailList[] = new QuotationDetail($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name);

        }
        require("connection_close.php");
        return $QuotationDetailList;
    }
}
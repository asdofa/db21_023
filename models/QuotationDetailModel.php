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

    public static function get($QD_ID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM QUO_DETAIL NATURAL JOIN QUOTATION NATURAL JOIN PROD_STOCK NATURAL JOIN COLOR NATURAL JOIN PRODUCT WHERE QD_ID = '$QD_ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $QD_ID = $my_row[QD_ID];
        $QUO_ID = $my_row[QUO_ID];
        $PRODSTOCK_ID = $my_row[PRODSTOCK_ID];
        $QD_QTY = $my_row[QD_QTY];
        $QD_ColorQTY = $my_row[QD_ColorQTY];
        $PROD_ID = $my_row[PROD_ID];
        $PROD_Name = $my_row[PROD_Name];
        $Color_ID = $my_row[Color_ID];
        $Color_Name = $my_row[Color_Name];
        require("connection_close.php");

        return new quotationDetail($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name);
    }

    public static function getAll()
    {
        $quotationDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM QUO_DETAIL NATURAL JOIN QUOTATION NATURAL JOIN PROD_STOCK NATURAL JOIN COLOR NATURAL JOIN PRODUCT ORDER BY QD_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $QD_ID = $my_row[QD_ID];
            $QUO_ID = $my_row[QUO_ID];
            $PRODSTOCK_ID = $my_row[PRODSTOCK_ID];
            $QD_QTY = $my_row[QD_QTY];
            $QD_ColorQTY = $my_row[QD_ColorQTY];
            $PROD_ID = $my_row[PROD_ID];
            $PROD_Name = $my_row[PROD_Name];
            $Color_ID = $my_row[Color_ID];
            $Color_Name = $my_row[Color_Name];

            $quotationDetailList[] = new QuotationDetail($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name);

        }
        require("connection_close.php");
        return $quotationDetailList;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM QUO_DETAIL NATURAL JOIN QUOTATION NATURAL JOIN PROD_STOCK NATURAL JOIN COLOR NATURAL JOIN PRODUCT WHERE (QD_ID like '%$key' OR QUO_ID like '%$key' OR PRODSTOCK_ID like '%$key' OR Color_Name like '%$key' OR PROD_Name like '%$key') AND QD_ID = QD_ID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QD_ID = $my_row[QD_ID];
            $QUO_ID = $my_row[QUO_ID];
            $PRODSTOCK_ID = $my_row[PRODSTOCK_ID];
            $QD_QTY = $my_row[QD_QTY];
            $QD_ColorQTY = $my_row[QD_ColorQTY];
            $PROD_ID = $my_row[PROD_ID];
            $PROD_Name = $my_row[PROD_Name];
            $Color_ID = $my_row[Color_ID];
            $Color_Name = $my_row[Color_Name];

            $quotationDetailList[] = new QuotationDetail($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name);
        }
        require("connection_close.php");

        return $quotationDetailList;
    }

    public static function add($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `QUO_DETAIL` (`QD_ID`, `QUO_ID`, `PRODSTOCK_ID`, `QD_QTY`, `QD_ColorQTY`, `PROD_ID`, `PROD_Name`, `Color_ID`, `Color_Name`) VALUES ('$QD_ID', '$QUO_ID', '$PRODSTOCK_ID', '$QD_QTY', '$QD_ColorQTY', '$PROD_ID', '$PROD_Name', '$Color_ID', '$Color_Name')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($QD_ID,$QUO_ID,$PRODSTOCK_ID,$QD_QTY,$QD_ColorQTY,$PROD_ID,$PROD_Name,$Color_ID,$Color_Name)
    {
        require("connection_connect.php");
        $sql = "UPDATE QUO_DETAIL SET QUO_ID = '$QUO_ID', PRODSTOCK_ID = '$PRODSTOCK_ID', QD_QTY = '$QD_QTY', QD_ColorQTY = '$QD_ColorQTY', PROD_ID = '$PROD_ID', PROD_Name = '$PROD_Name', Color_ID = '$Color_ID', Color_Name = '$Color_Name' WHERE QD_ID = '$QD_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($QD_ID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE FROM QUO_DETAIL WHERE QD_ID = '$QD_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>
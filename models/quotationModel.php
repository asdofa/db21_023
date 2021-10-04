<?php
class Quotation
{
    public $QUO_ID,$QUO_Date,$C_Name,$S_Name,$C_Address,$C_Phone;
    public $C_ID,$S_ID,$QUO_PaymentTerms,$QUO_Deposit;

    public function __construct($QUO_ID,$QUO_Date,$C_Name,$S_Name,$C_Address,$C_Phone,$C_ID,$S_ID,$QUO_PaymentTerms,$QUO_Deposit)
    {
        $this->QUO_ID = $QUO_ID;
        $this->QUO_Date = $QUO_Date;
        $this->C_Name = $C_Name;
        $this->S_Name = $S_Name;
        $this->C_Address = $C_Address;
        $this->C_Phone = $C_Phone;

        $this->C_ID = $C_ID;
        $this->S_ID = $S_ID;
        $this->QUO_PaymentTerms = $QUO_PaymentTerms;
        $this->QUO_Deposit = $QUO_Deposit;

    }

    public static function getAll()
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM QUOTATION NATURAL JOIN CUSTOMER NATURAL JOIN STAFF ORDER BY QUO_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $q_id = $my_row[QUO_ID];
            $date = $my_row[QUO_Date];
            $c_name = $my_row[C_Name];
            $s_name = $my_row[S_Name];
            $c_add = $my_row[C_Address];
            $c_phone = $my_row[C_Phone];

            $c_id = $my_row[C_ID];
            $s_id = $my_row[S_ID];
            $q_cdt = $my_row[QUO_PaymentTerms];
            $q_deposit = $my_row[QUO_Deposit];

            $quotationList[] = new Quotation($q_id,$date,$c_name,$s_name,$c_add,$c_phone,$c_id,$s_id,$q_cdt,$q_deposit);
        }
        require("connection_close.php");
        return $quotationList;
    }

    public static function Add($q_id,$q_date,$id_cus,$id_emp,$q_cdt,$q_deposit)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `QUOTATION` (`QUO_ID`, `QUO_Date`, `S_ID`, `C_ID`, `QUO_PaymentTerms`, `QUO_Deposit`) VALUES ('$q_id', '$q_date', '$id_emp', '$id_cus', '$q_cdt', '$q_deposit')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM QUOTATION NATURAL JOIN STAFF NATURAL JOIN CUSTOMER WHERE (QUO_ID like '%$key%' or QUO_Date like '%$key%' or S_Name like '%$key%' or C_Name like '%$key%')and C_ID=C_ID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $q_id = $my_row[QUO_ID];
            $date = $my_row[QUO_Date];
            $c_name = $my_row[C_Name];
            $s_name = $my_row[S_Name];
            $c_add = $my_row[C_Address];
            $c_phone = $my_row[C_Phone];

            $c_id = $my_row[C_ID];
            $s_id = $my_row[S_ID];
            $q_cdt = $my_row[QUO_PaymentTerms];
            $q_deposit = $my_row[QUO_Deposit];
            $quotationList[] = new Quotation($q_id,$date,$c_name,$s_name,$c_add,$c_phone,$c_id,$s_id,$q_cdt,$q_deposit);
        }
        require("connection_close.php");
        return $quotationList;

    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM QUOTATION NATURAL JOIN STAFF NATURAL JOIN CUSTOMER WHERE QUO_ID='$id' and C_ID = C_ID";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $q_id = $my_row[QUO_ID];
        $date = $my_row[QUO_Date];
        $c_name = $my_row[C_Name];
        $s_name = $my_row[S_Name];
        $c_add = $my_row[C_Address];
        $c_phone = $my_row[C_Phone];

        $c_id = $my_row[C_ID];
        $s_id = $my_row[S_ID];
        $q_cdt = $my_row[QUO_PaymentTerms];
        $q_deposit = $my_row[QUO_Deposit];
        require("connection_close.php");
        return new Quotation($q_id,$date,$c_name,$s_name,$c_add,$c_phone,$c_id,$s_id,$q_cdt,$q_deposit);

    }
    public static function Update($qid,$date,$idcus,$idemp,$qcdt,$qdeposit,$oldid)
     {
        require("connection_connect.php");
        $sql="UPDATE `QUOTATION` SET `QUO_ID`='$qid',`QUO_Date`='$date',
        `S_ID`='$idemp',`C_ID`='$idcus',`QUO_PaymentTerms`='$qcdt',`QUO_Deposit`='$qdeposit' WHERE QUO_ID = '$oldid'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

     public static function delete($id)
     {
         require("connection_connect.php");
         $sql = "DELETE FROM QUOTATION WHERE QUO_ID = '$id'";
         $result = $conn->query($sql);
         require("connection_close.php");
         return ;
     }
}
<?php
    class Customer{
        public $id;
        public $name;
        public $address;
        public $phone;
        public function __construct($id,$name,$address,$phone){
            $this->id=$id;
            $this->name=$name;
            $this->address=$address;
            $this->phone=$phone;
        }
        public static function getAll(){
            $customerList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM CUSTOMER";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row[C_ID];
                $name=$my_row[C_Name];
                $address=$my_row[C_Address];
                $phone=$my_row[C_Phone];
                $customerList[]=new CUSTOMER($id,$name,$address,$phone);
            }
            require("connection_close.php");
            return $customerList;
        }
    }
?>
<?php
    class Color{
        public $id;
        public $name;
        public function __construct($id,$name){
            $this->id=$id;
            $this->name=$name;
        }
        public static function getAll(){
            $colorList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM COLOR";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row[Color_ID];
                $name=$my_row[Color_Name];
                $colorList[]=new Color($id,$name);
            }
            require("connection_close.php");
            return $colorList;
        }
    }
?>
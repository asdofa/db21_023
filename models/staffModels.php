<?php
    class Staff{
        public $id;
        public $name;
        public $position;
        public $password;

        public function __construct($id, $name, $position, $password)
        {
            $this->id = $id;
            $this->name = $name;
            $this->position = $position;
            $this->password = $password;
        }

        public static function getAll()
        {
            $staffList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM STAFF";
            $result = conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $id = $my_row["S_ID"];
                $name = $my_row["S_Name"];
                $position = $my_row["S_Position"];
                $password = $my_row["S_Password"];
                $staffList[] = new STAFF($id, $name, $position, $password);
            }
            require("connection_close.php");
            return $staffList;
        }

    }
?>
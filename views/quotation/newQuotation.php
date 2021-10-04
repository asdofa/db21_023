<!DOCTYPE html>
<html>
<head>
<style>
body {
              background-color: #FFCDD2;
              color: #eb8c4a;
              font-family:FC Friday;
              text-align: center;
               }
</style>
</head>
<body>

<form method="get" action="">
<label>รหัส <input type="text" name="QUO_ID"/></label><br>
<label>วันที่ <input type="date" name="QUO_Date"/></label><br>
<label>ชื่อลูกค้า <select name="C_Name">
    <?php foreach($customerList as $C) {echo "<option value = $C->id>
    $C->name</option>";}
    ?>
    </select></label><br>
<label>ชื่อพนักงาน <select name="S_Name">
<?php foreach($staffList as $S) {echo "<option value = $S->id>
    $S->name</option>";}
    ?>
</select></label><br>
<label>เงื่อนไขชำระ(เครดิต/มัดจำ)<input type="text" name="QUO_PaymentTerms"/></label><br>
<label>%มัดจำ(กรณีเป็นเครดิตให้ใส่ 0)<input type="text" name="QUO_Deposit"/></label><br>
<center>
<input type="hidden"name="controller"value="quotation"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addQuotation">Save</button>

</form>

</center>
</body>
</html>
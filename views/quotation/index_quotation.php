<!DOCTYPE html>
<html>
<center>
<head>
<style>
table {
  font-family: 'Arial';
  font-size: 20px;
  text-align: center;
  margin: 25px auto;
  border-collapse: collapse;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
}
table tr:hover {
  background: #f4f4f4;
}
table tr:hover td {
  color: #000;
}
table th, table td {
  color: #555;
  padding: 12px 30px;
  border: 1px solid #eee;
  
  border-collapse: collapse;
}
table th {
  background: #00cccc;
  color: #fff;
  text-transform: uppercase;
}
table th.last {
  border-right: none;
}
body {
              background-color: #FFCDD2;
              color: #eb8c4a;
              font-family:FC Friday;
              text-align: center;
               }
</style>
</head>
<body>

<table border = 1>
<tr>
<td>เลขที่ใบเสนอราคา</td>
<td>วันที่</td>
<td>ลูกค้า</td>
<td>พนักงาน</td>
<td>ที่อยู่ลูกค้า</td>
<td>เบอร์โทร</td>
<td>เงื่อนไขชำระ</td>
<td>% มัดจำ</td>
<td>update</td>
<td>delete</td>
</tr>
<p>จัดทำโดย นางสาวธนานันท์ ติยะชัยพานิช รหัสนิสิต 6220503252</p>
<p style="font-size:50px">ใบเสนอราคา!</p>
เพิ่มใบเสนอราคา <a href=?controller=quotation&action=newQuotation>click</a><br>
<br /> 
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotation">
        <button type="submit" name="action" value="search">
search</button>
<br /> 
<p> </p>
</form>
<?php foreach($quotationList as $quotation){
    echo "<tr> 
    <td>$quotation->QUO_ID</td>
    <td>$quotation->QUO_Date</td> 
    <td>$quotation->C_Name</td>
    <td>$quotation->S_Name</td> 
    <td>$quotation->C_Address</td>
    <td>$quotation->C_Phone</td> 
    <td>$quotation->QUO_PaymentTerms</td>
    <td>$quotation->QUO_Deposit</td> 
    <td><a href=?controller=quotation&action=updateForm&QUO_ID=$quotation->QUO_ID>update</a></td>
    <td><a href=?controller=quotation&action=deleteConfirm&QUO_ID=$quotation->QUO_ID>delete</a></td>
    </tr>"; 
}
echo "</table>";
?>
</center>
</body>
</html>
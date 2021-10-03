<table border = 1>
<tr>
<td>เลขที่ใบเสนอราคา</td>
<td>วันที่</td>
<td>ลูกค้า</td>
<td>พนักงาน</td>
<td>ที่อยู่ลูกค้า</td>
<td>เบอร์โทร</td>
<td>เงื่อนไขชำระ</td>
<td>update</td>
<td>delete</td>
</tr>
<p>จัดทำโดย นางสาวธนานันท์ ติยะชัยพานิช รหัสนิสิต 6220503252</p>
<p>ใบเสนอราคา!</p>
เพิ่มใบเสนอราคา <a href=?controller=quotation&action=newQuotation>click</a><br>
<br /> 
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotation">
        <button type="submit" name="action" value="search">
search</button>
<br /> 
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
    <td><a href=?controller=quotation&action=updateForm&Q_ID=$quotation->Q_ID>update</a></td>
    <td><a href=?controller=quotation&action=deleteConfirm&Q_ID=$quotation->Q_ID>delete</a></td>
    </tr>"; 
}
echo "</table>";
?>
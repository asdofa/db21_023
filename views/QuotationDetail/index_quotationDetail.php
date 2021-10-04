<table border = 1>
<tr>
<td>เลขที่ใบเสนอราคา</td>
<td>เลขที่รายละเอียดใบเสนอราคา</td>
<td>PRODSTOCK_ID</td>
<td>ชื่อสินค้า</td>
<td>สี</td>
<td>QD_QTY</td>
<td>QD_ColorQTY</td>
<td>UPDATE</td>
<td>DELETE</td>
</tr>
<p>โดย นางสาวนภัสสร จิระ รหัสนิสิต 6220504682</p>
<p>รายละเอียดใบเสนอราคา</p>
เพิ่มรายละเอียดใบเสนอราคา! <a href=?controller=quotation&action=newQuotation>click</a><br>
<br /> 
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotationDetail">
        <button type="submit" name="action" value="search">
search</button>
<br /> 
</form>
<?php foreach($quotationDetailList as $quotationDetail){
    echo "<tr> 
    <td>$quotationDetail->QUO_ID</td>
    <td>$quotationDetail->QD_ID</td> 
    <td>$quotationDetail->PRODSTOCK_ID</td>
    <td>$quotationDetail->PROD_Name</td> 
    <td>$quotationDetail->Color_Name</td>
    <td>$quotationDetail->QD_QTY</td> 
    <td>$quotationDetail->QD_ColorQTY</td>
    <td><a href=?controller=quotationDetail&action=updateForm&QD_ID=$quotationDetail->QD_ID>update</a></td>
    <td><a href=?controller=quotationDetail&action=deleteConfirm&QD_ID=$quotationDetail->QD_ID>delete</a></td>
    </tr>"; 
}
echo "</table>";
?>
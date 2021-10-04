<table border = 1>
<tr> 
    <td>ProductID</td>
    <td>PROD_Name</td>
    <td>RATE_ID</td>
    <td>PROD_QTY</td>
    <td>PROD_Price</td>
    <td>PROD_SCPrice</td>
    <td>QTY_Rate</td>
    <td>Update</td>
    <td>Delete</td>
</tr>

<br /> 
    <p>นาย วัชรศักดิ์ ชื่นชม 6220503341</p>
<br /> 

    Add <a href=?controller=rate&action=newRate>click</a><br>
<br/>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="rate"/>
    <button type="submit" name="action" value="search">
    Search</button>
</form>


<?php foreach($rateList as $rate)
    {
        echo"<tr>
        <td>$rate->RATE_ID</td>
        <td>$rate->PROD_Name</td>
        <td>$rate->QTY_Rate</td>
        <td>$rate->PROD_Price</td>
        <td>$rate->PROD_SCPrice</td>
        <td><a href=?controller=rate&action=updateFormRate&RATE_ID=$rate->RATE_ID>update</a></td>
        <td><a href=?controller=rate&action=deleteRateConfirm&RATE_ID=$rate->RATE_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>

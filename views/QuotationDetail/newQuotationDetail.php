<form method="get" action="">
<label>QD_ID <input type="text" name="QD_ID"/></label><br>

<label>QUO_ID <select name="QUO_ID">
<?php foreach($QUOTATION as $Q) {echo "<option value = $Q->QUO_ID>
    $Q->QUO_ID</option>";}
    ?>
</select></label><br>

<label>Product_ID <select name="PRODSTOCK_ID">
<?php foreach($productstockList as $PS){
        echo "<option value = $PS->psid
        >$PS->name $S->color</option>";}
?>
</select></label><br>

<label>QD_QTY<input type="text" name="QD_QTY"/></label><br>
<label>QD_ColorQTY<input type="text" name="QD_ColorQTY"/></label><br>
<input type="hidden"name="controller"value="quotationDetail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addQuotationDetail">Save</button>

</form>
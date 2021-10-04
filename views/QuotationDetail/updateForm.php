<form method="get" action="">
<label>QD_ID <input type="text" name="QD_ID" 
        value="<?php echo $quotationDetail->QD_ID;?>"/></label><br>

        <label>QUO_ID <select name="QUO_ID">
    <?php foreach($quotationList as $Q) {
        echo "<option value = $Q->QUO_ID";
        if($Q->QUO_ID==$Quotation->QUO_ID){echo " selected='selected'";}
         echo ">$Q->QUO_ID</option>";}
    ?>
    </select></label><br> 

    <label>ProductStock_ID <select name="PRODSTOCK_ID">
    <?php foreach($productstockList as $PS) {
        echo "<option value = $PS->psid";
        if($PS->psid==$ProductStock->psid){echo " selected='selected'";}
         echo ">$PS->psid </option>";}
    ?>
    </select></label><br>

    <label>Product_ID <select name="PROD_ID">
        <?php foreach($productList as $P){
        echo "<option value = $P->PROD_ID";
        if($P->PROD_ID==$Product->PROD_ID){echo " selected='selected'";}
         echo ">$P->PROD_Name </option>";}
?>
</select></label><br>

<label>Color_Name <select name="Color_Name">
        <?php foreach($colorList as $C){
        echo "<option value = $C->id";
        if($C->id==$Color->id){echo " selected='selected'";}
         echo ">$C->name </option>";}
?>
</select></label><br>
        

<label>QD_QTY <input type="text" name="QD_QTY" 
        value="<?php echo $quotationDetail->QD_QTY;?>"/></label><br>

<label>QD_ColorQTY <input type="text" name="QD_ColorQTY"
        value="<?php echo $quotationDetail->QD_ColorQTY;?>"/></label><br>


<input type="hidden"name="controller"value="quotationDetail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
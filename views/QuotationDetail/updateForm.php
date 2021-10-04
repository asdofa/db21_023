<form method="get" action="">
<label>QD_ID <input type="text" name="QD_ID" 
        value="<?php echo $QUO_DETAIL->QD_ID;?>"/></label><br>

        <label>QUO_ID <select name="QUO_ID">
    <?php foreach($QUOTATION as $Q) {
        echo "<option value = $q->Q_ID";
        if($Q->QUO_ID==$QUO_DETAIL->QUO_ID){echo " selected='selected'";}
         echo ">$Q->QUO_ID</option>";}
    ?>
    </select></label><br> 

    <label>Product_ID <select name="PRODSTOCK_ID">
    <?php foreach($productstockList as $PS) {
        echo "<option value = $PS->psid";
        if($PS->psid==$QUO_DETAIL->PRODSTOCK_ID){echo " selected='selected'";}
         echo ">$PS->name $S->color</option>";}
    ?>
    </select></label><br> 

<label>QD_QTY <input type="text" name="QD_QTY" 
        value="<?php echo $QUO_DETAIL->QD_QTY;?>"/></label><br>

<label>QD_ColorQTY <input type="text" name="QD_ColorQTY"
        value="<?php echo $QUO_DETAIL->QD_ColorQTY;?>"/></label><br>


<input type="hidden"name="controller"value="quotationDetail"/>
<input type="hidden" name="oldid" value="<?php echo $QUO_DETAIL->QD_ID; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
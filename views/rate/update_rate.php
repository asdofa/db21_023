<form method="get" action="">

<label>ID <input type="text" name="RATE_ID" 
        value=  "<?php echo $RATE->RATE_ID;?>"/></label><br>

<label>Product ID <select name="PROD_ID">
    <?php foreach($productList as $PROD) {
        echo "<option value = $PROD->PROD_ID";
        if($PROD->PROD_ID==$RATE->PRO_ID){echo " selected='selected'";}
         echo ">$PROD->PROD_ID</option>";}
    ?>
    </select></label><br> 

<label>PROD_QTY(MIN)<input type="text" name="PROD_QTY"
    value = "<?php echo $RATE->PROD_QTY;?>"/></label><br>

<label>QTY_RATE(MAX)<input type="text" name="QTY_RATE"
    value = "<?php echo $RATE->QTY_RATE;?>"/></label><br>

<label>Price<input type="text" name="PROD_Price"
    value = "<?php echo $RATE->PROD_Price;?>"/></label><br>

<label>SCEEN<input type="text" name="PROD_SCPrice"
    value = "<?php echo $RATE->PROD_SCPrice;?>"/></label><br>

    
<input type="hidden"name="controller"value="rate"/>
<input type="hidden" name="PROD_ID" value="<?php echo $PROD->PROD_ID; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>
</form>

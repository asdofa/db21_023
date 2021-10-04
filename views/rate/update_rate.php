<form method="get" action="">
    <label>ID <input type="text" name="RATE_ID" value = "<?php echo $rate->RATE_ID;?>"/></label><br>

    <label>Product ID <select name="PROD_ID">
        <?php foreach($productList as $PROD) {
            echo "<option value = $PROD->PROD_ID";
            if($PROD->PROD_ID==$rate->PROD_ID){echo " selected='selected'";}
            echo ">$PROD->PROD_ID</option>";}
        ?>
    </select></label><br> 

    <label>PROD_QTY(MIN)<input type="text" name="PROD_QTY"
        value = "<?php echo $rate->PROD_QTY;?>"/></label><br>

    <label>QTY_RATE(MAX)<input type="text" name="QTY_RATE"
        value = "<?php echo $rate->QTY_Rate;?>"/></label><br>

    <label>Price<input type="text" name="PROD_Price"
        value = "<?php echo $rate->PROD_Price;?>"/></label><br>

    <label>SCEEN<input type="text" name="PROD_SCPrice"
        value = "<?php echo $rate->PROD_SCPrice;?>"/></label><br>

    
    <input type="hidden"name="controller"value="rate"/>
    <input type="hidden" name="RATE_ID" value="<?php echo $rate->RATE_ID; ?>"/>
    <button type= "submit"name="action"value="index">back</button>
    <button type= "submit"name="action"value="updateRate">update</button>
</form>

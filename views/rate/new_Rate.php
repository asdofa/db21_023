<form method="get" action="">
    <label>ID <input type="text" name="RATE_ID" /></label><br>
    <label>Product_ID <select name="PROD_ID">
            <?php foreach ($productList as $P) 
            {
                echo "<option value = $P->PROD_ID>
                $P->PROD_ID</option>";
            }
            ?>
        </select></label><br>
    <label>PROD_QTY(MIN)<input type="text" name="PROD_QTY" /></label><br>
    <label>QTY_RATE(MAX)<input type="text" name="QTY_RATE" /></label><br>
    <label>Price<input type="text" name="PROD_Price" /></label><br>
    <label>SCEEN<input type="text" name="PROD_SCPrice" /></label><br>
    
    <input type="hidden" name="controller" value="rate" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="addRate">Save</button>
</form>
<form method="get" action="">
<label>รหัส <input type="text" name="QUO_ID" 
        value="<?php echo $quotation->QUO_ID;?>"/></label><br>
<label>วันที่ <input type="date" name="QUO_DATE"
        value="<?php echo $quotation->QUO_Date;?>"/></label><br>

        <label>ชื่อลูกค้า <select name="C_Name">
    <?php foreach($customerList as $c) {
        echo "<option value = $c->id";
        if($c->id==$quotation->C_ID){echo " selected='selected'";}
         echo ">$c->name</option>";}
    ?>
    </select></label><br> 
    
<label>ชื่อพนักงาน <select name="S_Name">
    <?php foreach($staffList as $s) {
        echo "<option value = $s->id";
        if($s->id==$quotation->S_ID){echo " selected='selected'";}
         echo ">$s->name</option>";}
    ?>
    </select></label><br>

<label>เงื่อนไขชำระ <input type="text" name="QUO_PaymentTerms"
        value="<?php echo $quotation->QUO_PaymentTerms;?>"/></label><br>

<label>%มัดจำ(เครดิตเป็น0) <input type="text" name="QUO_Deposit"
        value="<?php echo $quotation->QUO_Deposit;?>"/></label><br>

<input type="hidden"name="controller"value="quotation"/>
<input type="hidden" name="oldid" value="<?php echo $quotation->QUO_ID; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
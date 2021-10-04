<?php echo "<br> ยืนยันจะลบรายละเอียดใบเสนอราคา ? <br>
            <br> $quotationDetail->QD_ID $quotationDetail->QUO_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotationDetail" />
    <input type="hidden" name="QD_ID" value="<?php echo $quotationDetail->QD_ID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    

</form>
<?php echo "<br> คุณยืนยันการกระทำนี้หรือไม่? <br>
            <br> $RATE->RATE_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="rate" />
    <input type="hidden" name="RATE_ID" value="<?php echo $RATE->RATE_ID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    

</form>

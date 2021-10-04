<!DOCTYPE html>
<html>
<center>
<head>
<style>
body {
              background-color: #FFCDD2;
              color: #eb8c4a;
              font-family:FC Friday;
              text-align: center;
               }
</style>
</head>
<body>

<?php echo "<br> ยืนยันจะลบใบเสนอราคา? <br>
<br>
            <br> $quotation->QUO_ID $quotation->C_Name <br><br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotation" />
    <input type="hidden" name="QUO_ID" value="<?php echo $quotation->QUO_ID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    
</form>

</center>
</body>
</html>
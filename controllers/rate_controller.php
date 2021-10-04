<?php 
class RateController
{
    public function index()
    {
        $rateList = Rate::getAll();
        require_once("./views/rate/Index_rate.php");
    }
    public function searchRate()
    {
        $key=$_GET['key'];
        $rateList = Rate::search($key);
        require_once("./views/rate/Index_rate.php");
    }
    public function newRate()
    {
        $productList = Product::getAll();
        $rateList = Rate::getAll();
        require_once("./views/rate/new_rate.php");
    }
    public function addRate()
    {
        $RATE_ID = $_GET['RATE_ID'];
        $PROD_ID = $_GET['PROD_ID'];
        $PROD_QTY = $_GET['PROD_QTY'];
        $PROD_Price= $_GET['PROD_Price'];
        $PROD_SCPrice = $_GET['PROD_SCPrice'];
        $QTY_Rate = $_GET['QTY_Rate'];
        Rate::add($PROD_ID,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
        RateController::index();
    }
    public function updateFormRate()
    {
        $ID=$_GET['RATE_ID'];
        $rate = Rate::get($ID);
        $rateList = product::getAll();
        require_once("./views/rate/update_rate.php");
    }

    public function updateRate()
    {

        $RATE_ID = $_GET['RATE_ID'];
        $PROD_ID = $_GET['PROD_ID'];
        $PROD_QTY = $_GET['PROD_QTY'];
        $PROD_Price= $_GET['PROD_Price'];
        $PROD_SCPrice = $_GET['PROD_SCPrice'];
        $QTY_Rate = $_GET['QTY_Rate'];

        Rate::update($PROD_ID,$RATE_ID,$PROD_QTY,$PROD_Price,$PROD_SCPrice,$QTY_Rate);
        RateController::index();
    }
    public function deleteRateConfirm()
    {
        $ID = $_GET['RATE_ID'];
        $rate = Rate::get($ID);
        require_once("./views/rate/delete_rate_Confirm.php");
    }
    public function deleteRate()
    {
        $ID=$_GET['RATE_ID'];
        Rate::delete($ID);
        RateController::index();
    }

    
} ?>
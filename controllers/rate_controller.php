<?php 
class RateController
{
    public function index()
    {
        $RateList = Rate::getAll();
        require_once("./views/rate/index_rate.php");
    }
    public function searchRate()
    {
        $key=$_GET['key'];
        $RateList = Rate::search($key);
        require_once("./views/rate/index_rate.php");
    }
    public function newRate()
    {
        $RateList = Rate::getAll();
        require_once("./views/rate/index_rate.php");
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
        $RATE = Rate::get($ID);
        $RateList = product::getAll();
        require_once("./views/rate/index_rate.php");
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
        $ID=$_GET['RATE_ID'];
        $RATE = Rate::get($ID);
        require_once("./views/rate/index_rate.php");
    }
    public function deleteRate()
    {
        $ID=$_GET['PRI_ID'];
        Rate::delete($ID);
        RateController::index();
    }

    
} ?>
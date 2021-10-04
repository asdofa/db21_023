<?php
class QuotationDetailController
{
    public function index()
    {
        $quotationDetailList = QuotationDetail::getAll();
        require_once("./views/QuotationDetail/index_quotationDetail.php");
    }
    public function newQuotationDetail() 
    {
        $quotationList = Quotation::getAll();
        $productstockList = ProductStock::getAll();
        $productList = Product::getAll();
        require_once("./views/QuotationDetail/newQuotationDetail.php");
    }
    public function addQuotationDetail()
    {

        $quo_id = $_GET['QUO_ID'];
        $quoDetail_id = $_GET['QD_ID'];
        $prodstock_id = $_GET['PRODSTOCK_ID'];
        $prod_name = $_GET['PROD_Name'];
        $color_name = $_GET['Color_Name'];
        $qd_qty = $_GET['QD_QTY'];
        $qd_colorqty = $_GET['QD_ColorQTY'];

        QuotationDetail::Add($quo_id,$quoDetail_id,$prodstock_id,$prod_name,$color_name,$qd_qty,$qd_colorqty);

        QuotationDetailController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $quotationDetailList = QuotationDetail::search($key);
        require_once("./views/QuotationDetail/index_quotationDetail.php");
    }

    public function updateForm()
    {
        $qd_id = $_GET['QD_ID'];
        $quotationDetail = QuotationDetail::get($qd_id);
        $quotationList = Quotation::getAll();
        $productstockList = ProductStock::getAll();
        $productList = Product::getAll();

        require_once("./views/QuotationDetail/updateForm.php");
    }

    public function update()
    {
        $quo_id = $_GET['QUO_ID'];
        $quoDetail_id = $_GET['QD_ID'];
        $prodstock_id = $_GET['PRODSTOCK_ID'];
        $prod_name = $_GET['PROD_Name'];
        $color_name = $_GET['Color_Name'];
        $qd_qty = $_GET['QD_QTY'];
        $qd_colorqty = $_GET['QD_ColorQTY'];
        $old_id = $_GET['old_id'];
        
        QuotationDetail::Update($quo_id,$quoDetail_id,$prodstock_id,$prod_name,$color_name,$qd_qty,$qd_colorqty,$old_id);
        QuotationDetailController::index();
    }

    public function deleteConfirm()
    {
        $id = $_GET['QD_ID'];
        $quotationDetail = QuotationDetail::get($id);
        require_once("./views/QuotationDetail/deleteConfirm.php");
    }
    public function delete()
    {
        $id = $_GET['QD_ID'];
        QuotationDetail::delete($id);
        QuotationDetailController::index();
    }
    
}
?>
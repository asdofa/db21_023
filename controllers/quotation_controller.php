<?php
class QuotationController
{
    public function index()
    {
        $quotationList = Quotation::getAll();
        require_once("./views/quotation/index_quotation.php");
    }
    public function newQuotation()
    {
        $staffList = Staff::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/newQuotation.php");
    }
    public function addQuotation()
    {

        $qid=$_GET['QUO_ID'];
        $date=$_GET['QUO_Date'];
        $customer=$_GET['C_Name'];
        $staff=$_GET['S_Name'];
        $qcdt=$_GET['QUO_PaymentTerms'];
        $qdeposit=$_GET['QUO_Deposit'];
        $pdo_m=-1;
        Quotation::Add($qid,$date,$customer,$staff,$qcdt,$qdeposit,$pdo_m);

        (new QuotationController)->index();
        //QuotationController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $quotationList = Quotation::search($key);
        require_once("./views/quotation/index_quotation.php");
    }

    public function updateForm()
    {
        $id=$_GET['QUO_ID'];
        $quotation = Quotation::get($id);
        $staffList = Staff::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/updateForm.php");
    }

    public function update()
    {
        $qid=$_GET['QUO_ID'];
        $date=$_GET['QUO_DATE'];
        $customer=$_GET['C_Name'];
        $staff=$_GET['S_Name'];
        $qcdt=$_GET['QUO_PaymentTerms'];
        $qdeposit=$_GET['QUO_Deposit'];
        $oldid=$_GET['oldid'];
        Quotation::Update($qid,$date,$customer,$staff,$qcdt,$qdeposit,$oldid);

        (new QuotationController)->index();
    }

    public function deleteConfirm()
    {
        $id=$_GET['QUO_ID'];
        $quotation = Quotation::get($id);
        require_once("./views/quotation/deleteConfirm.php");
    }
    public function delete()
    {
        $id=$_GET['QUO_ID'];
        Quotation::delete($id);
        (new QuotationController)->index();
    }
    
}
?>
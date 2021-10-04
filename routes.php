<?php
$controllers = array('pages'=>['home', 'error'],'quotation'=>['index','newQuotation','addQuotation','search','updateForm','update','deleteConfirm','delete'] ,'rate'=>['index','searchRate','newRate','addRate','updateFormRate','updateRate','deleteRateConfirm','deleteRate']
); 

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	$controller = new PagesController();
						break;
		case "quotation" : 	require_once("models/quotationModel.php");
							require_once("models/staffModels.php");
							require_once("models/customerModels.php");
							$controller = new QuotationController();
							break;
		case "rate" : 	echo "dompsmgpms";
						require_once("models/rateModel.php");
						require_once("models/ProductModel.php");
						$controller = new RateController();
						break;
	}

	$controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{	if(in_array($action, $controllers [$controller]))
	{	call($controller, $action); }
	else
	{	call('pages', 'error'); }

}
else
{	call('pages', 'error');} 
?>
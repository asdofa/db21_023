<?php
$controllers = array('pages'=>['home', 'error']); //list controller

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("controllers/" .$controller." controller.php"); 
	switch($controller)
	{
		case "pages":	$controller = new PagesController();
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
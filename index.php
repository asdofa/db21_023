<?php
if(isset($_GET['controller']) && isset($_GET['action'])) 
{   $controller = $_GET['controller'];
    $action = $_GET['action'];

}else

{   $controller= 'pages'; 
    $action = 'home';

} ?>
<html>
<head></head>
<body>
    <?php echo "controller= ".$controller.", action=".$action; ?> 
    <br>[<a href="">Home </a>] <br>
    <?php require_once("routes.php"); ?>
</body>
</html>
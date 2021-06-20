<?php
// Using the present technique all code starts here, because we are using "requires" or "includes"

session_start(); 

// This script goes to a specified controller
if ( isset($_REQUEST["ctr"]) ){
    $ControllerName = $_REQUEST["ctr"];
    require_once ("Controller\\".$ControllerName.".php");
}
else
    require_once "Controller\NavController.php";


?>

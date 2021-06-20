<?php

/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*Call for the Sign In Model*/
require_once("Model/signinmodel.php");

/*Definition of the Sign In Controller*/
class SignInController
{
    
    /*Definition of the Construct Function for the Sign In Controller*/
    public function __construct()
    {
        
        /*RETRIEVES THE COMMAND REQUEST FROM VIEW*/
        if (isset($_REQUEST['command'])) {
            
            switch ($_REQUEST['command']) {
                    
                /*CHECKS IF THE COMMAND REQUEST IS A SIGNINSUBMIT ONE*/
                case "SignInSubmit":
                    
                    $this->title = "Chefrachy";
                    
                    /*CHECKS IF THE COMPSUBMIT CONTAINS THE FIRST REQUIRED FIELD, THE USERNAME*/
                    if (isset($_REQUEST['UserName'])) 
                    {
                        
                        /*INSTANSTIATION OF NEW SIGN IN MODEL*/
                        $aModel = new signinmodel();
                        
                        /*CALLS TO SIGN IN PROCEDURE*/
                        $lcResult = $aModel->signin($_REQUEST['UserName'], $_REQUEST['UserPassword']);
                        
                        /*IF SIGN IN IS UNSUCCESSFUL*/
                        if ($lcResult == false)
                        {
                           require_once("View/SignInFailView.php"); 
                        }
                        /*IF SIGN IN IS SUCCESSFUL*/
                        else
                        {
                            $_SESSION['UserName'] = $_REQUEST['UserName'];
                            require_once("View/SignInSuccessView.php");
                        }
                        
                    }
                    
                    break;
                    
            }
        }
        
    }
    
    
}

/*INSTANSTIATION OF NEW SignInController*/
$aController = new SignInController();

?>
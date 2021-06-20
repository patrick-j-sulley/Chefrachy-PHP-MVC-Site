<?php

/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*Call for the Sign Up Model*/
require_once("Model//signupmodel.php");

/*Definition of the Sign Up Controller*/
class SignUpController
{
    
    /*Definition of the Construct Function for the Sign Up Controller*/
    public function __construct()
    {
        
        /*RETRIEVES THE COMMAND REQUEST FROM VIEW*/
        if (isset($_REQUEST['command'])) {
            
            switch ($_REQUEST['command']) {
                    
                /*CHECKS IF THE COMMAND REQUEST IS A SIGNUPSUBMIT ONE*/
                case "SignUpSubmit":
                    
                    $this->title = "Chefrachy";
                    
                    /*CHECKS IF THE COMPSUBMIT CONTAINS THE FIRST REQUIRED FIELD, THE USERNAME*/
                    if (isset($_REQUEST['UserName'])) 
                    {
                        
                        /*INSTANSTIATION OF NEW SIGN UP MODEL*/
                        $aModel = new signupmodel();
                        
                        /*CALLS TO SIGN UP PROCEDURE*/
                        $lcResult = $aModel->signup($_REQUEST['UserName'], $_REQUEST['EmailAddr'],  $_REQUEST['UserPassword']);
                        
                        /*IF SIGN UP IS UNSUCCESSFUL*/
                        if ($lcResult == false)
                        {
                           require_once("View/SignUpFailView.php"); 
                        }
                        /*IF SIGN UP IS SUCCESSFUL*/
                        else
                        {
                            $_SESSION['UserName'] = $_REQUEST['UserName'];
                            require_once("View/SignUpSuccessView.php");
                        }
                        
                    }
                    
                    break;
                    
            }
        }
        
    }
    
    
}

/*INSTANSTIATION OF NEW SignUpController*/
$aController = new SignUpController();

?>
<?php

/*Call for the Competition Model*/
require_once("Model//compmodel.php");

/*Definition of the Competition Controller*/
class CompController
{
    
    /*Definition of the Construct Function for the Competition Controller*/
    public function __construct()
    {
        
        /*RETRIEVES THE COMMAND REQUEST FROM VIEW*/
        if (isset($_REQUEST['command'])) {
            
            switch ($_REQUEST['command']) {
                /*CHECKS IF THE COMMAND REQUEST IS A COMPSUBMIT ONE*/
                case "CompSubmit":
                    
                    $this->title = "Chefrachy";
                    /*CHECKS IF THE COMPSUBMIT CONTAINS THE FIRST REQUIRED FIELD, THE CLASS NAME*/
                    if (isset($_REQUEST['ClassName'])) 
                    {
                        
                        /*INSTANSTIATION OF NEW COMP MODEL*/
                        $schoolcheckModel = new compmodel();
                        
                        /*CALL TO CHECKSCHOOLNAME PROCEDURE*/
                        $lcResult = $schoolcheckModel->CheckSchoolName($_REQUEST['SchoolName']);
                        
                        /*IF SCHOOL NAME DOESN'T EXIST*/
                        if (isset($lcResult['NoSchoolExists']))
                        {
                            
                        /*LOAD SCHOOL NAME DOES NOT EXIST VIEW*/
                        require_once("View/CompSchoolNotExistView.php");
                            
                        }
                        /*IF SCHOOL NAME DOES EXIST*/
                        else
                        {
                        
                        /*INSTANSTIATION OF NEW COMP MODEL*/
                        $submitModel = new compmodel();
                        
                        /*COLLECTS VARIABLES FROM THE COMP MODEL AND INITIATES A COMPSUBMIT REQUEST*/
                        $submitModel->compsubmit($_REQUEST['ClassName'], $_REQUEST['SchoolName'], $_REQUEST['EmailAddr'], $_REQUEST['PhoneNo'], $_REQUEST['QuestionID'], $_REQUEST['AnswerID']);
                            
                        /*UPON A COMPLETED COMPSUBMIT, THE FORM SUCCESS VIEW IS LOADED*/
                        require_once("View/compsuccessview.php");
                            
                            
                        }
                        
                    }
                    
                    break;
                    
            }
        }
        
        
    }
    
    
}

/*INSTANSTIATION OF NEW CompController*/
$aController = new CompController();



?>
    ?>

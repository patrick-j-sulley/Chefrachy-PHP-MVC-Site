<?php

/*Definition of the Progress Controller*/
class ProgressController
{
    
    /*Definition of the Construct Function for the Progress Controller*/
    public function __construct()
    {
        /*Call for the Progress Model*/
        require_once("Model//progressmodel.php");
        
        /*Instantiation of new ProgressModel*/
        $progress_UserRecipes = new progressmodel();  
                            
        /*CALL TO THE RETRIEVE ALL USER COMPLETED RECIPES PROCEDURE*/
        $lcResult = $progress_UserRecipes->RetrieveAllUserCompletedRecipes($_SESSION['UserName']);                   
    }               
                    
}
    
/*INSTANSTIATION OF NEW ProgressController*/
$aController = new ProgressController();

?>

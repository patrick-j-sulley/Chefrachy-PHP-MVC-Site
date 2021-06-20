<?php

/*Call for the Recipe Model*/
require_once("Model//RecipeModel.php");

/*Definition of the Recipe Controller*/
class RecipeController
{   
    /*Definition of the Construct Function for the Categories Controller*/
    public function __construct()
    {
        
        /*RETRIEVES THE COMMAND REQUEST FROM VIEW*/
        if (isset($_REQUEST['command'])) {
            
            switch ($_REQUEST['command']) {
                    
                /*CHECKS IF THE COMMAND REQUEST IS A RECIPECOMPLETE ONE*/
                case "RecipeComplete":
                    
                    $this->title = "Chefrachy";
                    
                    /*CHECKS IF THE COMPSUBMIT CONTAINS THE FIRST REQUIRED FIELD, THE RECIPE NAME*/
                    if (isset($_REQUEST['RecipeName'])) 
                    {
                        
                        /*INSTANSTIATION OF NEW RECIPE MODEL*/
                        $a_RecipeIDModel = new RecipeModel();
                        
                        /*INSTANSTIATION OF NEW RECIPE MODEL*/
                        $a_RecipeSubmitModel = new RecipeModel();
                        
                        /*Instantiation of Username Variable*/
                        $lcUserName = $_SESSION["UserName"];
                        
                        /*Instantiation of Last Viewed Recipe Variable*/
                        $_SESSION["LastCompletedRecipe"] = $_REQUEST['RecipeName'];  
                                    
                        /*CALL TO THE CONFIRM RECIPE COMPLETION PROCEDURE*/
                        $lcRecipeID = $a_RecipeIDModel->RecipeCompleteConfirm($_REQUEST['RecipeName']);
                        
                        /*CALL TO THE CONFIRM RECIPE COMPLETION SUBMIT PROCEDURE*/
                        $a_RecipeSubmitModel->RecipeCompleteConfirm_Submit($lcUserName, $lcRecipeID);
                        
                    }
                    
                    break;
                    
            }
        }
        
        /*Call for the RecipeSuccessView View*/
        require_once("View/recipesuccessview.php");
    }
    
    
}

/*INSTANSTIATION OF NEW CompController*/
$aController = new RecipeController();



?>
?>
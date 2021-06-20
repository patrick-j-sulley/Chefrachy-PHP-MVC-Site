<?php

/*Definition of the Recipe Load Comments Controller*/
class RecipeLoadCommentsController
{   
    /*Definition of the Construct Function for the Recipe Load Comments Controller*/
    public function __construct()
    {
        /*Call for the Recipe Model*/
        require_once("Model//recipemodel.php");
        
        /*Instantiation of new RecipeModel*/
        $progress_RecipeComments = new recipemodel();  
                            
        /*CALL TO THE RETRIEVE RECIPE COMMENTS PROCEDURE*/
        $lcComments = $progress_RecipeComments->RetrieveRecipeComments($lcRecipeID);  
                         
    }               
                    
}

/*INSTANSTIATION OF NEW RecipeLoadCommentsController*/
$aController = new RecipeLoadCommentsController();

?>

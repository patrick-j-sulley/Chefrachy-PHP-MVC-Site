<?php

/*Call for the Recipe Model*/
require_once("Model//recipemodel.php");

/*Definition of the Recipe Submit Comment Controller*/
class RecipeSubmitCommentController
{
    
    /*Definition of the Construct Function for the Recipe Submit Comment Controller*/
    public function __construct()
    {
        
        /*RETRIEVES THE COMMAND REQUEST FROM VIEW*/
        if (isset($_REQUEST['command'])) {

            switch ($_REQUEST['command']) {
                    
                /*CHECKS IF THE COMMAND REQUEST IS A COMMENTSUBMIT ONE*/
                case "CommentSubmit":
                                        
                    /*CHECKS IF THE COMPSUBMIT CONTAINS THE FIRST REQUIRED FIELD, THE USERNAME*/
                    if (isset($_REQUEST['UserName'])) 
                    {

                        /*INSTANSTIATION OF NEW RECIPE MODEL*/
                        $aModel = new Recipemodel();
                        
                        /*CALLS TO THE SUBMIT COMMENT PROCEDURE*/
                        $aModel->SubmitComment($_REQUEST['UserName'], $_REQUEST['RecipeID'], $_REQUEST['CommentText'], $_REQUEST['StarRating']);
                        
                    }
                    
                    break;
                    
            }
        }
        
        /*Call for the Comment Submit View*/
        require_once("View/CommentSubmitView.php");
                        
    }               
                    
}

/*INSTANSTIATION OF NEW RecipeSubmitCommentController*/
$aController = new RecipeSubmitCommentController();
?>

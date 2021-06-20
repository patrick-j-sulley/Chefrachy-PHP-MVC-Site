<?php
/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*CREATION OF NEW SESSION*/
session_start();

/*CALL FOR DATABASE CONNECTION FILE UPON RECIPE MODEL LOAD*/
require_once("CompDB.php");

/*NAMING AND CREATION OF RECIPE MODEL CLASS FOR REFERENCES*/
class RecipeModel
{
    
    /*CREATION OF VARIABLE TO BE USED FOR STORAGE OF DATABASE NAME*/
    public $aDB = null;
    
    /*CONSTRUCTION OF MODEL TO DATABASE CONNECTION*/
    public function __construct()
    {
        $this->aDB = new CompDB('web601_milestone3');
    }
    
    /*RECIPEMODEL FUNCTION TO CREATE RECIPE COMPLETION CONFIRMATION IN DATABASE FROM RECIPE VIEW DATA*/
    public function RecipeCompleteConfirm($prRecipeName)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM RECIPE VIEW*/
        $RecipeName  = $this->aDB->sqlescape($prRecipeName);
        
        /*CREATES VARIABLE CONTAINING THE CALL GRAB RECIPE ID PROCEDURE*/
        $SQL = "Call GrabRecipeID('$prRecipeName');";   
        
        /*SENDS VARIABLE CONTAINING GRAB RECIPE ID PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
        /*COLLECTS ROW FROM RECIPE COMPLETION CONFIRMATION PROCEDURE*/
        $lcResult = $this->aDB->next();
        
        /*INSTANSTIATION OF VARIABLE CONTAINING RECIPE ID*/
        $lcRecipeID = $lcResult["ID"];
        
        /*RETURN RECIPE ID VARIABLE*/
        return $lcRecipeID;
                 
    }
    
    /*RECIPEMODEL FUNCTION TO CREATE CONFIRMED RECIPE COMPLETION SUBMISSION IN DATABASE FROM RECIPE VIEW DATA*/
    public function RecipeCompleteConfirm_Submit($prUserName,$prRecipeID)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM RECIPE VIEW*/
        $UserName  = $this->aDB->sqlescape($prUserName);  
        $RecipeID = $this->aDB->sqlescape($prRecipeID);    
        
        /*CREATES VARIABLE CONTAINING THE CALL USER CONFIRM RECIPE COMPLETION PROCEDURE*/
        $SQL = "Call UserConfirmRecipeCompletion('$UserName','$RecipeID')";   
        
        /*SENDS VARIABLE CONTAINING CONFIRMED RECIPE COMPLETION SUBMISSION PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
        /*COLLECTS ROW FROM CONFIRMED RECIPE COMPLETION SUBMISSION PROCEDURE*/
        $lcResult = $this->aDB->next();
        
        /*INSTANSTIATION OF VARIABLE CONTAINING RECIPE ID*/
        $lcRecipeID = $lcResult["ID"];
                
    }
    
    /*RECIPEMODEL FUNCTION TO RETRIEVE SPECIFIED RECIPE DETAILS IN DATABASE FROM RECIPE VIEW DATA*/
    public function RetrieveRecipeDetails($prRecipeName)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM FORM VIEW*/
        $RecipeName  = $this->aDB->sqlescape($prRecipeName);
            
        /*CREATES VARIABLE CONTAINING THE CALL RetrieveRecipeDetails PROCEDURE*/
        $SQL = "Call RetrieveRecipeDetails('$RecipeName')";   
        
        /*SENDS VARIABLE CONTAINING RetrieveRecipeDetails PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
        /*COLLECTS ROW FROM RetrieveRecipeDetails PROCEDURE*/
        $lcResult = $this->aDB->next();
        
        /*RETURN ROW FROM RetrieveRecipeDetails PROCEDURE*/
        return $lcResult;
     
    }
    
    /*RECIPEMODEL FUNCTION TO CHECK COMPLETION STATUS FOR A RECIPE IN DATABASE FROM RECIPE VIEW DATA*/
    public function RecipeCompletionCheck($prUserName,$prRecipeID)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM RECIPE VIEW*/
        $UserName  = $this->aDB->sqlescape($prUserName);  
        $RecipeID = $this->aDB->sqlescape($prRecipeID);  
        
        /*CREATES VARIABLE CONTAINING THE CALL RecipeCompletionCheck PROCEDURE*/
        $SQL = "Call RecipeCompletionCheck('$UserName','$RecipeID')";  
        
        /*SENDS VARIABLE CONTAINING RecipeCompletionCheck PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
        /*COLLECTS ROW FROM RecipeCompletionCheck PROCEDURE*/
        $lcResult = $this->aDB->next();
            
        /*IF RECIPE IS COMPLETED*/
        if (isset($lcResult['$RecipeCompletion']))
        {
            return true;
        }
        /*IF RECIPE IS NOT COMPLETED*/
        else
        {           
            return false;
        }
                               
    }
    
    /*RECIPEMODEL FUNCTION TO RETRIEVE COMMENTS FOR A RECIPE IN DATABASE FROM RECIPE VIEW DATA*/
    public function RetrieveRecipeComments($prRecipeID)
    {
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM RECIPE VIEW*/
        $RecipeID = $this->aDB->sqlescape($prRecipeID);   
        
        /*CREATES VARIABLE CONTAINING THE CALL RetrieveRecipeComments PROCEDURE*/
        $SQL = "Call RetrieveRecipeComments($RecipeID)"; 
        
        /*SENDS VARIABLE CONTAINING RetrieveRecipeComments PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
        /*FOR EACH ROW IN THE QUERY RESULT*/
       while ($row = $this->aDB->next())
       { 
            
        ?>  
            <!--DISPLAY TABLE ROW CONTAINING NAME OF USERNAME, AS WELL AS THE STAR RATING AND TEXT FOR EACH COMMENT FOR THE SPECIFIED RECIPE-->
            <tr>
                <td>
                    <b>User: </b>
                    <?=$row['UserName'];?>
                        <br>
                        <br>
                        <b>Recipe Rating: </b>
                        <?=$row['StarRating'];?> Stars
                        <br>
                        <br>
                        <b>Comment: </b>
                        <?=$row['Text'];?>
                </td>
            </tr>
        <?php
            
        }
        
    }
    
    /*RECIPEMODEL FUNCTION TO SUBMIT COMMENTS FOR A RECIPE IN DATABASE FROM RECIPE VIEW DATA*/
    public function SubmitComment($prUserName,$prRecipeID,$prCommentText,$prStarRating)
    {
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM RECIPE VIEW*/
        $UserName  = $this->aDB->sqlescape($prUserName);
        $RecipeID = $this->aDB->sqlescape($prRecipeID);
        $CommentText  = $this->aDB->sqlescape($prCommentText);
        $StarRating    = $this->aDB->sqlescape($prStarRating);
        
        /*CREATES VARIABLE CONTAINING THE CALL SubmitComment PROCEDURE*/
        $SQL = "Call SubmitComment('$prUserName', $prRecipeID, '$prCommentText', '$prStarRating')";
        
        /*SENDS VARIABLE CONTAINING SubmitComment PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        
    }


    
}



?>

<?php
/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*CREATION OF NEW SESSION*/
session_start();

/*CALL FOR DATABASE CONNECTION FILE UPON PROGRESS MODEL LOAD*/
require_once("CompDB.php");

/*NAMING AND CREATION OF PROGRESS MODEL CLASS FOR REFERENCES*/
class progressmodel
{
    
    /*CREATION OF VARIABLE TO BE USED FOR STORAGE OF DATABASE NAME*/
    public $aDB = null;
    
    /*CONSTRUCTION OF MODEL TO DATABASE CONNECTION*/
    public function __construct()
    {
        $this->aDB = new CompDB('web601_milestone3');
    }
    
    /*COMPSUBMIT FUNCTION TO CREATE COMPETITION ENTRY IN DATABASE FROM PROGRESSVIEW DATA*/
    public function RetrieveAllUserCompletedRecipes($prUserName)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM FORM VIEW*/
        $UserName  = $this->aDB->sqlescape($prUserName);
        
        
        /*INSTANSTIATION OF VARIABLE TO CARRY SQL QUERY WITH VARIABLES FROM PROGRESS VIEW*/
        $SQL = "Call RetrieveAllUserCompletedRecipes('$UserName')";
        
        /*CALLS FOR RetrieveAllUserCompletedRecipes PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $this->aDB->query($SQL);

       /*FOR EACH ROW IN THE QUERY RESULT*/
       while ($row = $this->aDB->next())
       {
           
        ?>
            <!--DISPLAY TABLE ROW CONTAINING NAME OF USERNAME, AS WELL AS THE LEVEL, CATEGORY, STAR RATING, PREP TIME & AMOUNT OF SERVINGS FOR EACH RECIPE-->
            <tr>
                <td>
                    <?=$row['Name'];?>
                        <br>
                        <?="|Level: ", $row['Level'], " | ", "Category: ", $row['Category'], " | ", "Star Rating: ", $row['StarRating'], " Stars", " | ", "Preperation Time: ", $row['PrepTime'], " Minutes", " | ", "Amount of Servings: ", $row['Servings'],"|";?>
                </td>
                <td>
                    Yes
                </td>
            </tr>

        <?php           
           
       }
 
    }
    
}

?>

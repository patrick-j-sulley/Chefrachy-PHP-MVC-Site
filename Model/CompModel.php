<?php
/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*CREATION OF NEW SESSION*/
session_start();

/*CALL FOR DATABASE CONNECTION FILE UPON FORM MODEL LOAD*/
require_once("CompDB.php");

/*NAMING AND CREATION OF FORM MODEL CLASS FOR REFERENCES*/
class compmodel
{
    
    /*CREATION OF VARIABLE TO BE USED FOR STORAGE OF DATABASE NAME*/
    public $aDB = null;
    
    /*CONSTRUCTION OF MODEL TO DATABASE CONNECTION*/
    public function __construct()
    {
        $this->aDB = new CompDB('web601_milestone3');
    }
    
    /*COMPSUBMIT FUNCTION TO CREATE COMPETITION ENTRY IN DATABASE FROM compview FORM DATA*/
    public function compsubmit($prClassName, $prSchoolName, $prEmailAddr, $prPhoneNo, $prQuestionID, $prAnswerID)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM FORM VIEW*/
        $ClassName  = $this->aDB->sqlescape($prClassName);
        $SchoolName = $this->aDB->sqlescape($prSchoolName);
        $EmailAddr  = $this->aDB->sqlescape($prEmailAddr);
        $PhoneNo    = $this->aDB->sqlescape($prPhoneNo);
        $QuestionID = $this->aDB->sqlescape($prQuestionID);
        $AnswerID   = $this->aDB->sqlescape($prAnswerID);
        
        
        /*INSTANSTIATION OF VARIABLE TO CARRY SQL QUERY WITH VARIABLES FROM FORM VIEW*/
        $SQL = "Call UserCompEntry('$ClassName', '$SchoolName', '$EmailAddr', '$PhoneNo', '$QuestionID', '$AnswerID')";
        
        /*CALLS FOR USERCOMPENTRY PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $this->aDB->query($SQL);
        
        /*STORES THE INPUTTED EMAIL FROM THE USERS COMP ENTRY WITHIN THE SESSION*/
        $_SESSION['UserEmail'] = $EmailAddr;
        
    }
    
    /*GETUSERCOMPENTRY FUNCTION THAT GATHERS THE COMPETITION ENTRY THAT CONTAINS THE INPUTTED EMAIL*/
    public function GetUserCompEntry($prUserEmail)
    {
        
        
        /*SQL ESCAPE CHECK FOR THE USERS SESSION STORED EMAIL ADDRESS*/
        $UserEmail = $this->aDB->sqlescape($prUserEmail);
        /*CALLS FOR USERCOMPENTRY PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $SQL       = "Call GetUserCompEntry ('$UserEmail')";
        /*CALLS FOR USERCOMPENTRY PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $this->aDB->query($SQL);
        /*PUTS THE ROW COLLECTED FROM QUERY INTO A VARIABLE*/
        $UserCompEntry = $this->aDB->next();
        /*RETURNS THE VARIABLE WITH THE ROW FROM QUERY DISPLAYED*/
        return $UserCompEntry;
    }
    
    
    /*NEXTANSWER FUNCTION THAT COLLECTS THE NEXT ROW DOWN IN AN ANSWER QUERY*/
    public function NextAnswer()
    {
        
        return $this->aDB->next();
        
    }
    
    
    
    /*GETRANDOMQUESTION FUNCTION THAT COLLECTS A RANDOM QUESTION FROM THE DATABASE*/
    public function GetRandomQuestion()
    {
        /*CREATES VARIABLE CONTAINING THE CALL GETRANDOMQUESTION PROCEDURE*/
        $SQL = "Call GetRandomQuestion()";
        /*SENDS VARIABLE CONTAINING GETRANDOMQUESTION PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        /*COLLECTS ROW FROM GETRANDOMQUESTION PROCEDURE*/
        $row = $this->aDB->next();
        /*RETURNS COLLECTED ROW FROM GETRANDOMQUESTION PROCEDURE*/
        
        return $row;
        
    }
    
    /*FUNCTION TO GET ANSWERS FOR RANDOMLY COLLECTED QUESTION*/
    public function GetQuestionAnswers($QuestionID)
    {
        /*CREATES VARIABLE CONTAINING THE CALL GETQUESTIONANSWERS PROCEDURE*/
        $SQL = "Call GetQuestionAnswers($QuestionID)";
        /*SENDS VARIABLE CONTAINING GETQUESTIONANSWERS PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        /*COLLECTS ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        $row = $this->aDB->next();
        /*RETURNS COLLECTED ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        return $row;
        
    }
    
        /*FUNCTION TO GET ANSWERS FOR RANDOMLY COLLECTED QUESTION*/
    public function RecipeCompletionCheck($prUserName, $prRecipeID)
    {
        
        $UserName = $this->aDB->sqlescape($prUserName);
        $RecipeID = $this->aDB->sqlescape($prRecipeID);
        
        /*CREATES VARIABLE CONTAINING THE CALL GETQUESTIONANSWERS PROCEDURE*/
        $SQL = "Call RecipeCompletionCheck('$UserName', '$RecipeID')";
        /*SENDS VARIABLE CONTAINING GETQUESTIONANSWERS PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        /*COLLECTS ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        $row = $this->aDB->next();
        /*RETURNS COLLECTED ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        return $row;
        
    }
    
    public function CheckSchoolName($prSchoolName)
    {
        $SchoolName = $this->aDB->sqlescape($prSchoolName);
        
        /*CREATES VARIABLE CONTAINING THE CALL GETQUESTIONANSWERS PROCEDURE*/
        $SQL = "Call CheckSchoolName('$SchoolName')";
        /*SENDS VARIABLE CONTAINING GETQUESTIONANSWERS PROCEDURE CALL TO DATABASE*/
        $this->aDB->query($SQL);
        /*COLLECTS ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        $row = $this->aDB->next();
        /*RETURNS COLLECTED ROW FROM GETQUESTIONANSWERS PROCEDURE*/
        return $row;
        
        
        
    }
    
}



?>
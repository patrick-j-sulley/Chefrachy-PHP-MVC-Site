<?php
/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*CREATION OF NEW SESSION*/
session_start();

/*CALL FOR DATABASE CONNECTION FILE UPON SIGN UP MODEL LOAD*/
require_once("CompDB.php");

/*NAMING AND CREATION OF SIGN UP MODEL CLASS FOR REFERENCES*/
class signupmodel
{
    
    /*CREATION OF VARIABLE TO BE USED FOR STORAGE OF DATABASE NAME*/
    public $aDB = null;
    
    /*CONSTRUCTION OF MODEL TO DATABASE CONNECTION*/
    public function __construct()
    {
        $this->aDB = new CompDB('web601_milestone3');
    }
    
    /*COMPSUBMIT FUNCTION TO INITIATE A SIGNUP IN THE DATABASE FROM SIGNUPVIEW FORM DATA*/
    public function signup($prUserName, $prEmailAddr,  $prUserPassword)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM SIGNUP VIEW*/
        $UserName = $this->aDB->sqlescape($prUserName);
        $EmailAddr  = $this->aDB->sqlescape($prEmailAddr);        
        $UserPassword  = $this->aDB->sqlescape($prUserPassword);
        
             
        /*CREATES VARIABLE CONTAINING THE CALL SIGNUP PROCEDURE*/
        $SQL = "Call SignUp('$UserName', '$EmailAddr', '$UserPassword')";
        
        /*CALLS FOR SIGNUP PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $this->aDB->query($SQL);
        
        /*PUTS THE ROW COLLECTED FROM QUERY INTO A VARIABLE*/
        $UserSignUp = $this->aDB->next();
        
        /*IF THE SIGN UP WAS UNSUCCESSFUL*/               
        if (isset($UserSignUp['lcSignUpFail'])) {
            
            return false;
        }
        /*IF THE SIGN UP WAS SUCCESSFUL*/ 
        else
        {
            return true;
        }
                
    }
    
}

?>
<?php
/*V-USED TO DISABLE ERROR MESSAGES-V*/
error_reporting(E_ALL & ~E_NOTICE);

/*CREATION OF NEW SESSION*/
session_start();

/*CALL FOR DATABASE CONNECTION FILE UPON SIGN IN MODEL LOAD*/
require_once("CompDB.php");

/*NAMING AND CREATION OF SIGN IN MODEL CLASS FOR REFERENCES*/
class signinmodel
{
    
    /*CREATION OF VARIABLE TO BE USED FOR STORAGE OF DATABASE NAME*/
    public $aDB = null;
    
    /*CONSTRUCTION OF MODEL TO DATABASE CONNECTION*/
    public function __construct()
    {
        $this->aDB = new CompDB('web601_milestone3');
    }
    
    /*COMPSUBMIT FUNCTION TO INITIATE A SIGNIN IN THE DATABASE FROM SIGNINVIEW FORM DATA*/
    public function signin($prUserName, $prUserPassword)
    {
        
        /*SQL ESCAPE CHECK ON EACH INDIVIDUAL VARIABLE FROM SIGNIN VIEW*/
        $UserName = $this->aDB->sqlescape($prUserName);
        $UserPassword  = $this->aDB->sqlescape($prUserPassword);
        
             
        /*CREATES VARIABLE CONTAINING THE CALL SIGNIN PROCEDURE*/
        $SQL = "Call SignIn('$UserName', '$UserPassword')";
        
        /*CALLS FOR SIGNIN PROCEDURE FROM DATABASE WITH SQL QUERY VARIABLE*/
        $this->aDB->query($SQL);
        
        /*PUTS THE ROW COLLECTED FROM QUERY INTO A VARIABLE*/
        $UserSignIn = $this->aDB->next();
        
        /*IF THE SIGN IN WAS UNSUCCESSFUL*/               
        if (isset($UserSignIn['lcSignInFail'])) {
            
            return false;
        }
        /*IF THE SIGN IN WAS SUCCESSFUL*/ 
        else
        {
            return true;
        }
        
    }
    
}

?>
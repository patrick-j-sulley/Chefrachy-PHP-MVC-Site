<?php

class CompDB
{
    
    /*VARIABLE TO HANDLE THE RESOURCES INVOVLED WITHIN PROCEDURES SENT TO DATABASE*/
    private $rs;
    
    /*VARIABLE TO HANDLE THE RESOURCES INVOLVED WITHIN CONNECTION TO DATABASE*/
    private $connectRs;
    
    /*VARIABLE TO HANDLE THE RESOURCES FETCHED FROM A RESULT FROM THE DATABASE*/
    private $fetchResult;
    
    private $DBi;
    
    /*FUNCTION TO HANDLE THE DATABASE CONNECTION*/
    private function connectDb($pStrDatabase)
    {
        /*CONNECTS THE CURRENT INSTANCE TO THE SPECIFIED DATABASE SERVER*/
        $this->connectRs = mysqli_connect("localhost", "root", "P@ssword1");
        
        /*CHECKS FOR AN UNSUCCESSFUL CONNECTION*/
        if (!$this->connectRs) {
            echo "Error connecting to the database server" . mysqli_error($this->connectRs);
            $this->connectRs = -1;
        }
        
        /*SELECTS THE SPECIFIED DATABASE*/
        $dbRs = mysqli_select_db($this->connectRs, $pStrDatabase);
        
        /*CHECKS FOR AN UNSUCCESSFUL DATABASE CONNECTION*/
        if (!$dbRs) {
            echo "Error selecting the database" . mysql_error($this->connectRs);
            
        }
        
    }
    
    /*FUNCTION TO HANDLE QUERYS SENT TO THE DATABASE*/
    public function query($pStrSQL)
    {
        
        $this->rs = -1;
        
        /*SENDS QUERY TO CONNECTED DATABASE*/
        
        $this->rs = mysqli_query($this->connectRs, $pStrSQL);
        /*CHECKS IF QUERY IS INCOMPATIBLE*/
        if (!$this->rs) {
            echo "Error running query [$pStrSQL] " . mysqli_error($this->connectRs) . "<br>";
            $this->rs = -1;
        }
        
        
    }
    
    
    /*FUNCTION TO CONSTRUCT THE CONNECTION TO SPECIFIED DATABASE*/
    public function __construct($pStrDatabase)
    {
        
        $this->connectDb($pStrDatabase);
        
        
    }
    
    /*FUNCTION TO GO TO THE NEXT ROW DOWN IN RETURNED RESULTS*/
    public function next()
    {
        $aRow = mysqli_fetch_assoc($this->rs);
        return $aRow;
    }
    
    
    public function free()
    {
        mysqli_free_result($this->rs);
    }
    
    /*FUNCTION TO INITIATE SQLESCAPE CHECKING*/
    public function sqlescape($prString)
    {
        mysqli_real_escape_string($this->connectRs, $prString);
        return $prString;
    }     

}
    
    
    

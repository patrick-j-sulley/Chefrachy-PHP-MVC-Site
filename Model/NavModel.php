<?php
    
/*NAMING AND CREATION OF NAVI MODEL CLASS FOR REFERENCES*/
class NavModel
{
    public $currentView = "HomeView.php"; // DefaultView

    private function getCurrentView()
    {
    // Returns current the current View number.
    // if we have session variable containing "view", 
    //  then return the value from "view".
        
         $lcResult = $this->currentView ;
        
         if(isset($_SESSION["view"])){
             $lcResult = $_SESSION["view"];
             
         }
        return $lcResult;
    }
    
    public function saveCurrentView($pViewName)
    {
        // saves the current $pViewName in to SESSION
        $_SESSION["view"] = $pViewName;
        
        // updates currentView to match
        $this->currentView =  $pViewName;
        
    }
    
    function __construct()
    {
        $this->currentView = $this->getCurrentView();
    }
}

?>

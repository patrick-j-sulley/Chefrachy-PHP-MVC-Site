<?php
/*Call for the Navigation Model*/
require_once "Model/NavModel.php";

/*Definition of the Levels Controller*/
class LevelsController
{
    /*Definition of the NavModel Variable*/
    private $navModel;    
    
    /*Title of the Levels view*/
    private $title = "Levels";

    /*Definition of the Construct Function for the Levels Controller*/
    function __construct(){
        
        /*Instantiation of new NavModel*/
        $this->navModel = new NavModel();
        
        // Make a local copy of the currentView
        $lcView = $this->navModel->currentView;
        
        /*Commands for all of the level category cases*/
        if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "level1": 
                 $this->title ="Level 1 Categories";
                 $lcView = "Level1CategoryView.php";
                 break;
            case "level2": 
                 $this->title ="Level 2 Categories";
                 $lcView = "Level2CategoryView.php";
                 break;
            case "level3": 
                 $this->title ="Level 3 Categories";
                 $lcView = "Level3CategoryView.php";
                 break;
            case "level4": 
                 $this->title ="Level 4 Categories";
                 $lcView = "Level4CategoryView.php";
                 break;
            case "level5": 
                 $this->title ="Level 5 Categories";
                 $lcView = "Level5CategoryView.php";
                
                               
                 break;
            default: 
                 $lcView = "HomeView.php";
        }
        
        // up date the saved view with the local copy
        $this->navModel->saveCurrentView($lcView);
        
        require_once("View//".$lcView);
    }
    
}

/*New instanstiation for the Levels Controller*/
$LevelsController = new LevelsController();
?>

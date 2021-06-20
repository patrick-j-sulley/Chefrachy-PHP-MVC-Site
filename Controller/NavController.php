<?php

/*Call for the Navigation Model*/
require_once "Model/NavModel.php";

/*Definition of the Navigation Controller*/
class NavController
{   
    /*Definition of the NavModel Variable*/
    private $navModel;

    /*Title of the Home view*/
    private $title = "Home";
    
    /*Definition of the Construct Function for the Navigation Controller*/
    function __construct(){
        
        /*Instantiation of new NavModel*/
        $this->navModel = new NavModel();
        
        // Make a local copy of the currentView
        $lcView = $this->navModel->currentView;
         
        /*Commands for all of the navigation cases*/
        if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "home": 
                 $lcView = "HomeView.php";
                 break;
            case "levels":
                 $this->title ="Levels";
                 $lcView = "LevelsView.php";
                break;
            case "recipe_progress":
                 $this->title ="Progress";
                 $lcView = "ProgressView.php";
                break;
            case "logout":
                 $this->title ="Logout";
                 $lcView = "LogoutView.php";
                break;
            case "logout_success":
                unset ($_SESSION["UserName"]);
                $this->title ="Logout Successful";
                $lcView = "LogoutSuccessView.php";
                break;
            case "signin":
                 $this->title ="Sign In";
                 $lcView = "SignInView.php";
                break;
            case "signup":
                 $this->title ="Sign Up";
                 $lcView = "SignUpView.php";
                break;
            case "form":
                 $this->title ="Competition";
                 $lcView = "CompView.php";
                break;
            default: 
                 $lcView = "HomeView.php";
        }
        
        /*update the saved view with the local copy*/
        $this->navModel->saveCurrentView($lcView);
        
        require_once("View//".$lcView);
    }
    
}

/*New instanstiation for the Nav Controller*/
$NavController = new NavController();
?>

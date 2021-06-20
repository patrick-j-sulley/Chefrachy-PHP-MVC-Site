<?php

/*Call for the Navigation Model*/
require_once "Model/NavModel.php";

/*Definition of the Categories Controller*/
class CategoriesController
{
    /*Definition of the NavModel Variable*/
    private $navModel;   

    /*Title of the categories view*/
    private $title = "Categories";
    
    /*Definition of the Construct Function for the Categories Controller*/
    function __construct(){
                
        /*Instantiation of new NavModel*/
        $this->navModel = new NavModel();
        
        // Make a local copy of the currentView
        $lcView = $this->navModel->currentView;
        
        
        /*Commands for all of the recipe category cases*/
        if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "breakfast": 
                 $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";
                 break;
            case "lunch": 
                  $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";
                 break;
            case "dinner": 
                 $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";
                 break;
            case "dessert": 
                 $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";
                 break;
            case "snack": 
                 $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";                              
                 break;
            case "search": 
                 $this->title ="Recipe Search Results";
                 $lcView = "RecipeSearchResultsView.php";          
                 break;
            default: 
                 $lcView = "HomeView.php";
        }
        
        /*update the saved view with the local copy*/
        $this->navModel->saveCurrentView($lcView);
        
        require_once("View//".$lcView);
    }
    
}

/*New Instantiation for the Categories Controller*/
$CategoriesController = new CategoriesController();
?>

<?php

/*Call for the Recipe Model*/
require_once "Model/NavModel.php";

/*Definition of the Search Results Controller*/
class SearchResultsController
{
    /*Definition of the NavModel Variable*/
    private $navModel; 
    
    /*Title of the Recipe view*/
    private $title = "Recipe Page";

    /*Definition of the $searchresultsModel variable*/
    public $searchresultsModel;
    
    /*Definition of the Construct Function for the Search Results Controller*/
    function __construct(){
        
        /*Instantiation of new NavModel*/
        $this->navModel = new NavModel();
        
        // Make a local copy of the currentView
        $lcView = $this->navModel->currentView;
        
        /*Commands for all of the recipe search result cases*/
        if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "recipe_chickenchowmein": 
                 $this->title ="Chicken Chow Mein Recipe";
                 $lcView = "RecipeChickenChowMeinView.php";
                 break;
            case "recipe_mommaslasagna": 
                 $this->title ="Mommas Lasagna Recipe";
                 $lcView = "RecipeMommasLasagnaView.php";
                 break;  
            case "recipe_deepdishpizzapie": 
                 $this->title ="Deep Dish Pizza Pie Recipe";
                 $lcView = "RecipeDeepDishPizzaPieView.php";
                 break;      
            case "recipe_turkishcharredmeatkebabs": 
                 $this->title ="Turkish Charred Meat Kebabs Recipe";
                 $lcView = "RecipeTurkishCharredMeatKebabsView.php";
                 break;   
            default: 
                 $lcView = "HomeView.php";
        }
        
        /*update the saved view with the local copy*/
        $this->navModel->saveCurrentView($lcView);
        
        require_once("View//".$lcView);
    }
    
}

/*New Instantiation for the Search Results Controller*/
$SearchResultsController = new SearchResultsController();
?>

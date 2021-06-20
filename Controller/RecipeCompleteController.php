<?php
/*IF USER HAS ALREADY COMPLETED RECIPE*/
if ($RecipeCompletionCheckResult == 1)
{
 ?>
    <!--DISABLED RECIPE COMPLETION BUTTON-->
    <button type="submit" class="btn btn-lg btn-warning btn-block" name="command" value="RecipeComplete" id="Confirm" disabled>
        You have already marked this recipe as Completed!
    </button>
    <?php

}
/*IF USER IS NOT LOGGED IN*/    
else if ($_SESSION['UserName'] == null)
{
 ?>
        <!--DISABLED RECIPE COMPLETION BUTTON-->
        <button type="submit" class="btn btn-lg btn-warning btn-block" name="command" value="RecipeComplete" id="Confirm" disabled>
            You need to log in before you can complete a recipe!
        </button>
        <?php  
}
/*IF USER HAS NOT COMPLETED RECIPE*/
else
{
 ?>
        <!--RECIPE COMPLETION BUTTON-->
        <form action="./?ctr=RecipeController" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="inputRecipeName" placeholder="Recipe Name" name="RecipeName" style="display: none;" value="<?php echo $lcRecipeName ?>">
                </div>
            <button type="submit" class="btn btn-lg btn-warning btn-block" name="command" value="RecipeComplete" id="Confirm">
                    I have completed this recipe!
            </button>
        </form>

            <?php
}

?>

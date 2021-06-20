<?php

/*IF USER IS NOT LOGGED IN*/
if ($_SESSION['UserName'] == null)
{
    ?>
    <!--LOCKED COMMENT FORM W/ DISABLED COMMENT FIELD, STAR RATING RADIO BUTTON SELECTER & SUBMIT BUTTON-->
    <form role="form" id="Comment" action="./?ctr=RecipeSubmitCommentController" method="post">
        <div class="form-group form-control md-1">
            <label for="exampleFormControlTextarea1">You Must be Logged in to Comment!</label>
            <textarea class="form-control" id="CommentField" rows="3" name="CommentText" disabled></textarea>
            <label for="exampleFormControlTextarea1">Select a Rating!</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" name="StarRating" value="1" disabled>
                <!-- 1 Star -->
                <label class="form-check-label" for="1star">
                    *
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" name="StarRating" value="2" disabled>
                <!-- 2 Star -->
                <label class="form-check-label" for="2star">
                    * *
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" name="StarRating" value="3" disabled>
                <!-- 3 Star -->
                <label class="form-check-label" for="3star">
                    * * *
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" name="StarRating" value="4" disabled>
                <!-- 4 Star -->
                <label class="form-check-label" for="4star">
                    * * * *
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" name="StarRating" value="5" disabled>
                <!-- 5 Star -->
                <label class="form-check-label" for="5star">
                    * * * * *
                </label>
            </div>

            <!-- RECIPE REVIEW SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="command" value="CommentSubmit" disabled>
                Submit
            </button>

        </div>
        <?php  
}
/*IF USER IS LOGGED IN*/
else
{
    ?>
            <!--ENABLED COMMENT FORM W/COMMENT FIELD, STAR RATING RADIO BUTTON SELECTER & SUBMIT BUTTON-->
            <form id="_Comment" action="./?ctr=RecipeSubmitCommentController" method="post">
                <div class="form-group md-1">
                    <input class="" type="hidden" name="UserName" value="<?= $_SESSION['UserName'] ?>">
                    <input class="" type="hidden" name="RecipeID" value="<?= $lcRecipeID ?>">
                    <label for="exampleFormControlTextarea1">Write a Comment!</label>
                    <textarea class="form-control" id="CommentField" rows="3" name="CommentText"></textarea>

                    <label for="exampleFormControlTextarea1">Select a Rating!</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="StarRating" value="1" checked>
                        <!-- 1 Star -->
                        <label class="form-check-label" for="1star">
                            *
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="StarRating" value="2">
                        <!-- 2 Star -->
                        <label class="form-check-label" for="2star">
                            * *
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="StarRating" value="3">
                        <!-- 3 Star -->
                        <label class="form-check-label" for="3star">
                            * * *
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="StarRating" value="4">
                        <!-- 4 Star -->
                        <label class="form-check-label" for="4star">
                            * * * *
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="StarRating" value="5">
                        <!-- 5 Star -->
                        <label class="form-check-label" for="5star">
                            * * * * *
                        </label>
                    </div>

                    <!-- RECIPE REVIEW SUBMIT BUTTON -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="command" value="CommentSubmit">
                        Submit
                    </button>

                </div>
            </form>

            <?php
}
       


?>

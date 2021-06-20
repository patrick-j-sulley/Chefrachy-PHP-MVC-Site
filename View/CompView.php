<html>

<head>
    <title>
        <?=$this->title?>
    </title>
    <?php
    
        /*CALL FOR FORM MODEL UPON FORM VIEW LOAD*/
        require_once("Model/compmodel.php");


        /*INSTANSTIATION OF FORM MODEL FOR RETRIEVAL OF RANDOM QUESTION*/
        $compmodel_RandQuest = new compmodel();

        /*INSTANSTIATION OF FORM MODEL FOR THE RETRIEVAL OF ANSWERS FOR RANDOMLY RETRIEVED QUESTION*/
        $compmodel_QuestAns  = new compmodel();


        /*DECLARATION OF VARIABLE FOR ROW OF RANDOMLY RETRIEVED QUESTION*/
        $QuestionRow = $compmodel_RandQuest->GetRandomQuestion();

        /*DECLARATION OF VARIABLES FOR TEXT AND ID OF RANDOMLY RETRIEVED QUESTION*/
        $Question   = $QuestionRow["Text"];
        $QuestionID = $QuestionRow["ID"];


        /*DECLARATION OF VARIABLE FOR ROW OF THE ANSWERS FOR RANDOMLY RETRIEVED QUESTION*/
        $AnswerRow = $compmodel_QuestAns->GetQuestionAnswers($QuestionID);

        /*DECLARATION OF VARIABLES FOR TEXT AND ID OF 1ST ANSWER FOR RANDOMLY RETRIEVED QUESTION*/
        $Answer1   = $AnswerRow["Text"];
        $Answer1ID = $AnswerRow["ID"];


        /*CHANGING OF ROW VARIABLE TO THE 2ND ROW*/
        $AnswerRow = $compmodel_QuestAns->NextAnswer();

        /*DECLARATION OF VARIABLES FOR TEXT AND ID OF 2ND ANSWER FOR RANDOMLY RETRIEVED QUESTION*/
        $Answer2   = $AnswerRow["Text"];
        $Answer2ID = $AnswerRow["ID"];


        /*CHANGING OF ROW VARIABLE TO THE 3RD ROW*/
        $AnswerRow = $compmodel_QuestAns->NextAnswer();

        /*DECLARATION OF VARIABLES FOR TEXT AND ID OF 3RD ANSWER FOR RANDOMLY RETRIEVED QUESTION*/
        $Answer3   = $AnswerRow["Text"];
        $Answer3ID = $AnswerRow["ID"];
        
    ?>

        <!--  BOOSTRAP CSS REFERENCE  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- DYNAMICALLY GENERATED NAVIGATION BAR-->
            <div class="col-md-10">
                <?php  
           require_once("NavView.php");
                ?>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <!-- COMPETITION FORM-->
            <div class="col-md-4">
                <img src="images/competitionformheaderimage.JPG" style="width: 100%">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Enter your Competition Entry Details Below!</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <div class="comp-form">
                    <div class="main-div">
                        <form id="Comp" action="./?ctr=CompController" method="post">

                            <div class="form-group">
                                <h6>Class Name (2 Capital Letters + 2 Numbers.)</h6>

                                <!--Form Text Input Field for Class Name-->
                                <input type="text" class="form-control" id="inputClassroom" placeholder="Class Room (ex. AA11)" name="ClassName" maxlength="4" pattern="[A-Z]{1}[A-Z]{1}[0-9]{1}[0-9]{1}">

                            </div>

                            <div class="form-group">
                                <h6>School Name (Valid NZ School Name)</h6>

                                <!--Form Text Input Field for School Name-->
                                <input type="text" class="form-control" id="inputSchoolname" placeholder="School Name (e.x St Josephs School)" name="SchoolName">

                            </div>
                            <div class="form-group">
                                <h6>School Email (Valid Email Format)</h6>

                                <!--Form Text Input Field for Email Address-->
                                <input type="email" class="form-control" id="inputEmail" placeholder="School Email (e.x firstname-lastname@naycol.edu.nz)" name="EmailAddr">

                            </div>

                            <div class="form-group">
                                <h6>Phone Number (Valid National/International Phone # Format)</h6>

                                <!--Form Text Input Field for Phone Number-->
                                <input type="text" class="form-control" id="inputPhoneNum" placeholder="Phone Number (ex. 000-000-0000 or 00-000-0000)" name="PhoneNo" pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}|[0-9]{2}[ -][0-9]{3}[ -][0-9]{4}">

                            </div>
                            <legend class="form-check-label" value="">
                                <!--Text of Random Question Pulled from Database-->
                                <?= $Question ?>
                            </legend>
                            <br>
                            <input class="" type="hidden" name="QuestionID" value="<?= $QuestionID ?>">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnswerID" checked id="question1" value="<?= $Answer1ID ?>">
                                <label class="form-check-label" for="Answer1">
                                    <!--Radio Button for 1st Answer for Random Question Pulled from Database-->
                                    <?= $Answer1 ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnswerID" id="question2" value="<?= $Answer2ID ?>">
                                <label class="form-check-label" for="Answer2">
                                    <!--Radio Button for 2nd Answer for Random Question Pulled from Database-->
                                    <?= $Answer2 ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnswerID" id="question3" value="<?= $Answer3ID ?>">
                                <label class="form-check-label" for="Answer3">
                                    <!--Radio Button for 3rd Answer for Random Question Pulled from Database-->
                                    <?= $Answer3 ?>
                                </label>
                            </div>
                            <br>
                            <div class="form-button">
                                <!--Submit Button that sents the CompSubmit Request to the Form Controller-->
                                <button type="submit" class="btn btn-primary" name="command" value="CompSubmit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <!--  JAVASCRIPT REFERENCES  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

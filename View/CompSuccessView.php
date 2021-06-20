<html>

<head>
    <title>
        <?=$this->title?>
    </title>
    <?php
    
        /*Call for Comp Model*/
        require_once ("Model/compmodel.php");
        
        /*Instanstiation of new Comp Model*/
        $compmodel_Success = new compmodel();
        
        /*Call for GetUserCompEntry Procedure*/
        $UserSuccessCompEntry = $compmodel_Success->GetUserCompEntry($_SESSION['UserEmail']);
        
        /*Creation of Variables containing Class Name, School Name, Email Address, Phone Number, Question Text & Answer Text from User Comp Entry*/
        $ClassName = $UserSuccessCompEntry["ClassName"];
        $SchoolName = $UserSuccessCompEntry["SchoolName"];
        $Email = $UserSuccessCompEntry["EmailAddress"];
        $PhoneNo = $UserSuccessCompEntry["PhoneNo"];
        $QuestionText = $UserSuccessCompEntry["QuestionText"];
        $AnswerText = $UserSuccessCompEntry["AnswerText"];
        
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
            <div class="col-md-1">
            </div>
            <!-- SUCCESSFUL ENTRY CONFIRMED NOTIFICATION JUMBOTRON W/DATA FROM USERCOMPENTRY-->
            <div class="col-md-10">
                <div class="jumbotron">
                    <h1 class="display-4">Entry Confirmed!</h1>
                    <p class="lead">You have sucessfully entered into the draw for the laptop with the following data!</p>
                    <hr class="my-4">
                    <p class="lead">
                        <b>Class Name:</b>
                        <?=$ClassName ?>
                            <br>
                    </p>
                    <p class="lead">
                        <b>School Name:</b>
                        <?=$SchoolName ?>
                            <br>
                    </p>
                    <p class="lead">
                        <b>Email Address:</b>
                        <?=$Email ?>
                            <br>
                    </p>
                    <p class="lead">
                        <b>Phone Number:</b>
                        <?=$PhoneNo ?>
                            <br>
                    </p>
                    <p class="lead">
                        <b>Question:</b>
                        <?=$QuestionText ?>
                            <br>
                    </p>
                    <p class="lead">
                        <b>Your Answer:</b>
                        <?=$AnswerText ?>
                            <br>
                    </p>
                    <hr class="my-4">
                    <p>Please press Continue to go back to the home page.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="?cmd=home" role="button">Continue</a>
                    </p>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    <!--  JAVASCRIPT REFERENCES  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<?php
/*IF USER IS LOGGED IN*/
if (isset($_SESSION['UserName'])) 
{
 ?>
    <!--USERNAME LOGGED IN DISPLAY + PROGRESS & SIGN OUT BUTTONS-->
    <li class="nav-item nav" href="">Logged In As: <?php echo $_SESSION['UserName']?></li>
    <a class="nav-item nav-link" href="?cmd=recipe_progress">Progress</a>
    <a class="nav-item nav-link" href="?cmd=logout">Log Out</a>
    <?php

}
/*IF USER IS NOT LOGGED IN*/
else
{
 ?>
    <!--SIGN IN & SIGN UP BUTTONS-->
    <a class="nav-item nav-link" href="?cmd=signin">Sign In</a>
    <a class="nav-item nav-link" href="?cmd=signup">Sign Up</a>
    <?php
}
?>

<?php

if(isset($_POST["submit"]))
{
// Grabbing the data
$name = $_POST["name"];
$surname = $_POST["surname"];
$personalCode = $_POST["personalcode"];


// Instantiate Register class
include "../app/dbh.php";
include "../app/register.classes.php";
include "../app/register-contr.classes.php";
$register = new RegisterContr($name, $surname, $personalCode);

// Running error handler and user register
$register->registerUser();


// Going back to front page
header("location: ../index.php?error=none");

}
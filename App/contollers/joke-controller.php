<?php
session_start();
include "../autoloader/autoloader.php";


if (isset($_POST['save'])) SendJokeController();
if (isset($_POST['showrand'])) ShowRandJokeController();
if (isset($_GET['searchbtn'])) ShowSpecificJokeController();

function SendJokeController(){
    $joke = $_POST['jokeadd'];
    $joke = trim($joke);
    $joke = stripslashes($joke);
    $joke = htmlspecialchars($joke);
    $sendjk = new Joke();
    $sendjk->setJoke($joke);
    $sendjk->SendJokes();
}


function ShowRandJokeController(){
    $showjk = new Joke();
    $_SESSION["joke"] =   $showjk->ShowRandJokes();
    header('location: ../../Public/ranJoke.php ');        

}

function ShowSpecificJokeController(){
    $keyword = $_GET['search'];
    $showsjk = new Joke();
    $_SESSION["searchJoke"] =   $showsjk->ShowSpecificJoke($keyword);
    header('location: ../../Public/SearchJoke.php ');  
}
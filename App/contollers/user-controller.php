<?php
session_start();
include "../autoloader/autoloader.php";

if(isset($_POST['Login'])) LoginAdminController();
if(isset($_POST['addjokeadmin'])) AddJokeAdminController();
if(isset($_GET['id'])) DeleteJokeController();



function LoginAdminController(){

    $username = $_POST['username'];
    $password = $_POST['password'];
    //security part
    $username = trim($username);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = trim($password);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $user = new User($username,$password);
    $user->LoginAdmin();
 

}


function AddJokeAdminController(){
    $Joke = $_POST['Jokebyadmin'];
    $Joke = trim($Joke);
    $Joke = stripslashes($Joke);
    $Joke = htmlspecialchars($Joke);
    User::addJokeAdmin($Joke);


}


function DeleteJokeController(){
    $id = $_GET['id'];
    User::DeleteById($id);
}




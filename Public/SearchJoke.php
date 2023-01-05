<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Daddy Jokes !</title>
</head>
<body class="bg-grey">
    <div class="mt-4 d-flex justify-content-around">
 <img src="./img/logo.png" alt="" srcset="" width="30%" height="40%">
    </div>
    <div class="container mt-3 me-2 ">
        <form action="../App/contollers/joke-controller.php" method="get">
    <input  type="search" placeholder="search here" class="w-75" name="search">  <button type="submit" class="btn-search" name="searchbtn">
             <i class="fa fa-search text-white"> </i>Search </button>
             </div>
             </form>
             <div class="jk-br">
    <h3 class="jokewriting"><?php if(isset($_SESSION["searchJoke"])){echo  $_SESSION["searchJoke"]; unset($_SESSION['searchJoke']);}  ?></h3>
</div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



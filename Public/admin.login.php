<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
<div class="mt-4 d-flex justify-content-around">
 <img src="./img/logo.png" alt="" srcset="" width="30%" height="40%">
    </div>
    <div class="btn-section mt-4">
<center><div class="">
    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-style">LOGIN</button></div></center>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">LOGIN</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <form action="../App/contollers/user-controller.php" method="post">
        <label for="">Enter your username :</label>
        <br>
        <input type="text" name="username" id="">
        <br>
        <label for="">Enter your password :</label>
        <br>
        <input type="password" name="password" id="">
        </center>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn-style" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn-style" name="Login">LOGIN </button></form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
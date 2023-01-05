<?php
include '../App/models/user.php';
include_once '../App/config/db.php';

// include '../App/contollers/user-controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
  <div class="container d-flex justify-content-end mt-3">
  <button class="btn btn-dark" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" >ADD</button>
  
   </div>

<div class="container mt-4">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Joke</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
     <?php User::ShowAllJokes();
 


 ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>what is the dif beetwen an alaphent and a rabbit ? </td>
      <td>
        <button type="submit">EDIT</button>
        <button type="submit">DELETE</button>
      </td>
    
    </tr> -->
   
  </tbody>
</table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Joke</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
        <form action="../App/contollers/user-controller.php" method="post">
        <input name="Jokebyadmin" class="ml-2 inpu" type="textarea" placeholder="Type the Joke :">
        </center>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn-style" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn-style" name="addjokeadmin">Add </button></form>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
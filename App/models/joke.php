<?php
include '../config/db.php';

class Joke {
    public $joke;
    


public function setJoke($joke){
    $this->joke = $joke;
 }

function SendJokes(){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("INSERT INTO `joke`(`Joke`) VALUES ('$this->joke')");
    $stmt->execute();
    header('location: ../../index.php ');

}

function ShowRandJokes(){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("SELECT Joke FROM joke
    ORDER BY RAND()
    LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['Joke'];

}



function ShowSpecificJoke($keyword){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("SELECT  `Joke` FROM `joke` WHERE Joke like '%%'");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['Joke'];
}
}

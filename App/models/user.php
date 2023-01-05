<?php
// include_once '../config/db.php';
require_once (realpath($_SERVER["DOCUMENT_ROOT"]) . '/dadjokes/App/config/db.php');

class User
{

    private $username;
    private $password;


    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }



    function LoginAdmin()
    {
        $database = new Dbconnect();
        $db = $database->connect_pdo();
        $stmt = $db->prepare("SELECT * from admin where username = '$this->username'");
        $stmt->execute();
        $row = $stmt->fetch();
        if (!$row) {
            echo "Email Is not valid !";
        } else {
            if ($row['password'] == $this->password) {
                $_SESSION['USERNAME'] = $row['username'];

                header('location: ../../Public/admin.dashboard.php ');
                // echo $_SESSION['ROLE'];                    
            } else {
                echo "Password Wrong !";
            }
        }
    }


    public static function addJokeAdmin($joke)
    {
        $database = new Dbconnect();
        $db = $database->connect_pdo();
        $stmt = $db->prepare("INSERT INTO `joke`(`Joke`) VALUES ('$joke')");
        $stmt->execute();
        header('location: ../../Public/admin.dashboard.php ');
    }

    public static function ShowAllJokes()
    {
        $database = new Dbconnect();
        $db = $database->connect_pdo();
        $stmt = $db->prepare("SELECT * FROM `joke`");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        foreach($result as $row){
            $id = $row['id'];
            $joke = $row['Joke'];
            echo " <tr>
               <th scope='row'>$id</th>
               <td>$joke<td>
               <form action='../App/contollers/user-controller.php' method='GET'>
               <input type='hidden' name='id' value='$id'>
               <button value='delete' name='deletejoke' type='submit' class='btn btn-danger'>DELETE</button>
                 </form>
               </td>
             
             </tr>";
        }
    }

    public static function DeleteById($id){
        $database = new Dbconnect();
        $db = $database->connect_pdo();
        $stmt = $db->prepare("DELETE FROM `joke` WHERE id = '$id'");
        $stmt->execute(); 
        header('location: ../../Public/admin.dashboard.php ');

    }
}
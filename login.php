<?php 
session_start();

$users = array(
    array('username' => 'gigi', 'password' => '1234'),
    array('username' => 'stefano', 'password' => 'dscsdcsd'),
    array('username' => 'leonardo', 'password' => '2EDqesdqeq23'),
    array('username' => 'sara', 'password' => '1234'),
    array('username' => 'tiziana', 'password' => '00000'),
    array('username' => 'rebecca', 'password' => '18041995'),
    
);

$userName = (isset($_POST["userId"])) ? $_POST["userId"] :  "" ;
$userPsw = (isset($_POST["userPsw"])) ? $_POST["userPsw"] :  "" ;

if($_SESSION['username'] = ""){
    echo "Insert your username and password";
}

function checkData($id , $pass , $data){
    foreach ($data as $element){
        if ($element["username"] == $id && $element["password"] == $pass){
            return true;
            
        }
    }
}
if(checkData($userName , $userPsw , $users)){
        $_SESSION['username'] = $userName;
        header('Location: index.php');
    } elseif (empty($userName) || empty($userPsw)) {
        echo "Insert your username and password";
    } else {
        echo "Invalid password or username";
    }



?>

<form action="./login.php" method="POST">
    <div>
        <label for="userID">Insert your ID : </label>
        <input type="text" name="userId" id="userId">
        <label for="userPsw">Insert your Password : </label>
        <input type="password" name="userPsw" id="userPsw">
    </div>
    <button type="submit">Submit</button>
</form>
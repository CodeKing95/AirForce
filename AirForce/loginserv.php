<?php
$error='';
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        $error = "Username or Password is Invalid";
    }
    else
    {
        //Define $crew and $pass
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        //Establishing Connection with server by passing server_name, user_id and pass as a paramter
        $conn = mysqli_connect("localhost", "root", "");
        //Selecting Database
        $db = mysqli_select_db($conn, "data");
        //sql query to fetch information of registered user and finds user match.
        $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

        $rows = mysqli_num_rows($query);
        if($rows == 1){
            header("Location: Index.php");
        }
        else
        {  
            $error = "Username or Password is Invalid";
        }
        mysqli_close($conn); //Closing Connection
    }
}
?>
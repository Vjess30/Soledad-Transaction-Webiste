<?php 

session_start();
include "db_conn.php";

if(isset($_POST['Uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['Uname']);
    $pass = validate($_POST['password']);

    if (empty($username)){
        header("Location: admin.php? error = Username is required");
        exit();
    }else if (empty($pass)){
        header("Location: admin.php? error = Username is required");
        exit();
    }else{

        $sql= "SELECT * FROM soledad WHERE Username='$username' AND Password ='$pass'";

        $result= mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row ['Username'] === $username && $row['Password'] === $pass){
                $_SESSION ['Fullname'] = $row['Fullname'];
                $_SESSION ['Username'] = $row['Username'];
                header("location: Welcome-add.php");
            exit();
            }else{
            header("Location: admin.php?error =Incorrect Username and Password ");
            exit();
            }
        }else{
            header("Location: admin.php?error =Incorrect Usernames and Password ");
            exit();
        } 
    }
}else{
    header("Location: admin.php"); /*sa new html file para sa user */
    exit();
}

?>
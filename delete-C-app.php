<?php
include 'db_conn.php';

if(isset($_GET['deleteID'])){
    $id = $_GET['deleteID'];

    $sql = "delete from `announcement` where id=$id";

    $result =mysqli_query($conn, $sql);

    if($result){
        header('Location: Edit-C-Ann.php');
    }else{
        die(mysqli_error($conn));
    }
}
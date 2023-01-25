<?php
include 'db_conn.php';

if(isset($_GET['deleteID'])){
    $Id = $_GET['deleteID'];

    $sql = "delete from `appointment` where id=$Id";

    $result =mysqli_query($conn, $sql);

    if($result){
        header('Location: welcome-add.php');
    }else{
        die(mysqli_error($conn));
    }
}
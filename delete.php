<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `project1` where id=$id";
        $conn->query($sql);
    }
    header('location:/php-project/index.php');
    exit;
?>
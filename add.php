<?php
include 'db.php';

if(isset($_POST['send'])){
    $name= $_POST['task'];
    $sql = "insert into TASKS (name) values ('$name')";
    $val = $db->query($sql);

    if($val){
        header('location: index.php');
    }
}

?>
<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: prova.php');
    }else{
        header('Location: login.php');
    }

?>
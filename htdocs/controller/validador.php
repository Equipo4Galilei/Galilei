<?php
session_start();

if(empty($_SESSION['login'])){
        header("Location: ../home" );
}else{
        header("Location: ../admin" );
}
?>
<?php
session_start();
if ( isset($_SESSION['user'])){
    $halaman = $_SESSION['user_login'];
	header('location:on-'.$halaman);
	exit();
} else{
		header('location:login.php');
		exit();
}
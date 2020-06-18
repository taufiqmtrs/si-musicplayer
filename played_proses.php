<?php 

include_once "app/Controller.php";
include_once "app/Played.php";

$pla = new App\Played();

if ($_POST['btn-add']) {
	$pla->input();
	header("location:index.php?page=played_tampil");
}

if ($_POST['btn-edit']) {
	$pla->update();
	header("location:index.php?page=played_tampil");
}

if ($_GET['delete-id']) {
	$pla->delete($_GET['delete-id']);
	header("location:index.php?page=played_tampil");	
}

 ?>
<?php 

include_once "app/Controller.php";
include_once "app/Track.php";

$tra = new App\Track();

if ($_POST['btn-add']) {
	$tra->input();
	header("location:index.php?page=track_tampil");
}

if ($_POST['btn-edit']) {
	$tra->update();
	header("location:index.php?page=track_tampil");
}

if ($_GET['delete-id']) {
	$tra->delete($_GET['delete-id']);
	header("location:index.php?page=track_tampil");	
}

 ?>




 
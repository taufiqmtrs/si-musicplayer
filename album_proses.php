<?php 

include_once "app/Controller.php";
include_once "app/Album.php";

$alb = new App\Album();

if ($_POST['btn-add']) {
	$alb->input();
	header("location:index.php?page=album_tampil");
}

if ($_POST['btn-edit']) {
	$alb->update();
	header("location:index.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$alb->delete($_GET['delete-id']);
	header("location:index.php?page=album_tampil");	
}

 ?>




 
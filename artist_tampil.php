<h2>List Artist</h2>
<a href="index.php?page=artist_input">ADD</a>


<?php


$art = new App\Artist();
$rows = $art-> tampil();


 ?>

 <table>
 	<tr>
 		<td>ARTIST ID</td>
 		<td>ARTIST NAME</td>
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
	 	<tr>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['artist_name']; ?></td>
	 		<td><a href="index.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>">Edit</a></td>
	 		<td><a href="index.php?page=artist_proses&delete-id=<?php echo $row['artist_id']; ?>">Delete</a></td>
	 	</tr>
	 <?php } ?>

 </table>





 
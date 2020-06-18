<h2>List Played</h2>
<a href="index.php?page=played_input">ADD</a>


<?php


$pla = new App\Played();
$rows = $pla-> tampil();


 ?>

 <table>
 	<tr>
 		<td>ARTIST ID</td>
 		<td>ALBUM ID</td>
 		<td>TRACK ID</td>
 		<td>PLAYED</td>
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
	 	<tr>
	 		
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['played']; ?></td>
	 		<td><a href="index.php?page=played_edit&id=<?php echo $row['artist_id']; ?>">Edit</a></td>
	 		<td><a href="index.php?page=played_proses&delete-id=<?php echo $row['artist_id']; ?>">Delete</a></td>
	 	</tr>
	 <?php } ?>

 </table>


 
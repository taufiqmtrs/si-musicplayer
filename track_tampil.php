<h2>List Track</h2>
<a href="index.php?page=track_input">ADD</a>

<?php
$tra = new App\Track();
$rows = $tra-> tampil();

 ?>
 <table>
 	<tr>
 		<td>TRACK ID</td>
 		<td>TRACK NAME</td>
 		<td>ARTIST ID</td>
 		<td>ALBUM ID</td>
 		<td>TIME</td>
 		<td>EDIT</td>
 		<td>DELETE</td>
 	</tr>
 	<?php foreach ($rows as $row) { ?>
	 	<tr>
	 		
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['track_name']; ?></td>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['time']; ?></td>
	 		<td><a href="index.php?page=track_edit&id=<?php echo $row['track_id']; ?>">Edit</a></td>
	 		<td><a href="index.php?page=track_proses&delete-id=<?php echo $row['track_id']; ?>">Delete</a></td>
	 	</tr>
	 <?php } ?>

 </table>








 
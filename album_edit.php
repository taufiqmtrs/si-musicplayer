<?php 

$id = $_GET['id'];
$alb = new App\Album();
$row = $alb->edit($id);
 ?>
<h2>Edit Album</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>ARTIST ID</td>
			<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>
		<tr>
			<td>ALBUM NAME</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE" ""></td>
		</tr>
	</table>

</form>





<?php 

$id = $_GET['id'];
$tra = new App\Artist();
$row = $tra->edit($id);
 ?>

<h2>Edit Track</h2>
<form method="POST" action="track_proses.php">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>TRACK NAME</td>
			<td><input type="text" name="track_name"></td>
		</tr>

		<tr>
			<td>ARTIST ID</td>
			<td><input type="text" name="artist_id"></td>
		</tr>

		<tr>
			<td>ALBUM ID</td>
			<td><input type="text" name="album_id"></td>
		</tr>

		<tr>
			<td>TIME</td>
			<td><input type="time" name="time"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE" ""></td>
		</tr>
	</table>

</form>






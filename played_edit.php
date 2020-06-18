<?php 


$id = $_GET['id'];

$pla = new App\Played();
$row = $pla->edit($id);
 ?>



<h2>Edit Played</h2>
<form method="POST" action="played_proses.php">
	<input type="hidden" name="artist_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>ARTIST ID</td>
			<td><input type="number" name="artist_id"></td>
		</tr>

		<tr>
			<td>ALBUM ID</td>
			<td><input type="number" name="album_id"></td>
		</tr>

		<tr>
			<td>TRACK ID</td>
			<td><input type="number" name="track_id"></td>
		</tr>

		<tr>
			<td>PLAYED</td>
			<td><input type="date" name="played"></td>
		</tr>


		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE" ""></td>
		</tr>
	</table>

</form>





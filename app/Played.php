<?php 
namespace App;
class Played extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function input()
	{
		$arti = $_POST['artist_id'];
		$albi = $_POST['album_id'];
		$trai = $_POST['track_id'];
		$play = $_POST['played'];
		$sql = "INSERT INTO played (artist_id, album_id, track_id, played) VALUES (:artist_id, :album_id, :track_id, :played)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $arti);
		$stmt->bindParam(":album_id", $albi);
		$stmt->bindParam(":track_id", $trai);
		$stmt->bindParam(":played", $play);
		$stmt->execute();
		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM played";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row; 
		}  
		return $data;
	}

	public function edit()
	{
		
		$sql = "SELECT * FROM played WHERE artist_id=:artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$arti = $_POST['artist_id'];
		$albi = $_POST['album_id'];
		$trai = $_POST['track_id'];
		$play = $_POST['played'];
		$sql = "UPDATE played SET artist_id=:artist_id, album_id=:album_id, track_id=:track_id, played=:palyed time=:time  WHERE artist_id=:artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $arti);
		$stmt->bindParam(":album_id", $albi);
		$stmt->bindParam(":track_id", $trai);
		$stmt->bindParam(":played", $play);
		$stmt->execute();
		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM played WHERE artist_id=:artist_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $id);
		$stmt->execute();
		return false;

		
	}
}


 ?>



 
<?php 
namespace App;
class Track extends Controller
{	
	public function __construct()
	{
		parent::__construct();
	}
	public function input()
	{
		$trkn = $_POST['track_name'];
		$arti = $_POST['artist_id'];
		$albi = $_POST['album_id'];
		$tim = $_POST['time'];
		$sql = "INSERT INTO track (track_name, artist_id, album_id, time) VALUES (:track_name, :artist_id, :album_id, :time)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_name", $trkn);
		$stmt->bindParam(":artist_id", $arti);
		$stmt->bindParam(":album_id", $albi);
		$stmt->bindParam(":time", $tim);
		$stmt->execute();
		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM track";
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
		$sql = "SELECT * FROM track WHERE track_id=:track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$trkn = $_POST['track_name'];
		$arti = $_POST['artist_id'];
		$albi = $_POST['album_id'];
		$tim = $_POST['time'];
		$sql = "UPDATE track SET track_name=:track_name, artist_id=:artist_id, album_id=:album_id, time=:time  WHERE track_id=:track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_name", $trkn);
		$stmt->bindParam(":artist_id", $arti);
		$stmt->bindParam(":album_id", $albi);
		$stmt->bindParam(":time", $tim);
		$stmt->execute();
		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM track WHERE track_id=:track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $id);
		$stmt->execute();
		return false;
	}
}

 ?>























 
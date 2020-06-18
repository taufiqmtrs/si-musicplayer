<?php 
namespace App;
class Album extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function input()
	{
		$nama = $_POST['artist_id'];
		$namb = $_POST['album_name'];
		$sql = "INSERT INTO album (artist_id, album_name) VALUES (:artist_id, :album_name)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $nama);
		$stmt->bindParam(":album_name", $namb);
		$stmt->execute();
		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM album";
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
		$sql = "SELECT * FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$nama = $_POST['artist_id'];
		$namb = $_POST['album_name'];
		$id = $_POST['album_id'];
		$sql = "UPDATE album SET artist_id=:artist_id WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $nama);
		$stmt->bindParam(":album_name", $namb);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();
		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;

		
	}
}

 ?>






 
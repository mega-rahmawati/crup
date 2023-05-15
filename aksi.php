<?php 
class aksi{
	protected $mysqli;
	function __construct(){
		require_once "database.php";
		$conn = new database ();
		$this->mysqli = $conn->connect();
	}
function tampilkan(){
	$data = $this->mysqli->query("SELECT * FROM tabel_mhs");
	while ($amb = mysqli_fetch_array($data)){
		$hasil[] = $amb;
	}
	return $hasil;
}
function simpan($nim,$nama,$prodi){
	$result = $this->mysqli->query ("INSERT INTO tabel_mhs values('$nim','$nama','$prodi')");
	if($result) return 1; 
		else return 0;
}
}

 ?>
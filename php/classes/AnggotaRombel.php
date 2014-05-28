<?php
require_once ("class-config.php");

class AnggotaRombel
{
	public $results;
	
	public function __construct() {
	}
	
	public function getResults(stdClass $params) {
		try	{
			$results = array();
			
			$db = Config::getInstance();
			$query = "
SELECT 
  peserta_didik.peserta_didik_id, 
  peserta_didik.nama, 
  peserta_didik.jenis_kelamin, 
  peserta_didik.nisn, 
  peserta_didik.nik, 
  peserta_didik.tempat_lahir, 
  peserta_didik.tanggal_lahir, 
  rombongan_belajar.semester_id, 
  prasarana.nama as nama_kelas
FROM 
  public.peserta_didik, 
  public.anggota_rombel, 
  public.rombongan_belajar, 
  public.prasarana
WHERE 
  anggota_rombel.peserta_didik_id = peserta_didik.peserta_didik_id AND
  rombongan_belajar.rombongan_belajar_id = anggota_rombel.rombongan_belajar_id AND
  prasarana.prasarana_id = rombongan_belajar.prasarana_id AND
  rombongan_belajar.semester_id = '20132'
ORDER BY
  rombongan_belajar.semester_id ASC, 
  prasarana.nama ASC,
  peserta_didik.nama ASC";
			$stmt = $db->prepare($query);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_BOTH);
			
			while ($row = $stmt->fetch()) {
				array_push($results, $row);
			}
			
			return $results;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
		$stmt->closeCursor();
		$db=null;
	}
		
	public function __destruct() {
	}
}
?>

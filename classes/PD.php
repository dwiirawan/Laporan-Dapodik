<?php
require_once ("class-config.php");

class PD
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
  peserta_didik.alamat_jalan,
  peserta_didik.rt,
  peserta_didik.rw,
  peserta_didik.nama_dusun,
  peserta_didik.desa_kelurahan,
  peserta_didik.nomor_telepon_seluler,
  peserta_didik.email,
  peserta_didik.no_skhun,
  peserta_didik.nama_ayah,
  peserta_didik.nama_ibu_kandung,
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

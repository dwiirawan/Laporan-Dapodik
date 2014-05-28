<?php
require_once ("class-config.php");

class RiwayatKepangkatan
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
  ptk.nama, 
  pangkat_golongan.kode, 
  rwy_kepangkatan.nomor_sk, 
  rwy_kepangkatan.tanggal_sk, 
  rwy_kepangkatan.tmt_pangkat, 
  rwy_kepangkatan.masa_kerja_gol_tahun, 
  rwy_kepangkatan.masa_kerja_gol_bulan, 
  rwy_kepangkatan.last_update,  
  rwy_kepangkatan.last_sync,
  rwy_kepangkatan.soft_delete
FROM 
  public.ptk, 
  public.rwy_kepangkatan, 
  ref.pangkat_golongan
WHERE 
  ptk.ptk_id = rwy_kepangkatan.ptk_id AND
  rwy_kepangkatan.pangkat_golongan_id = pangkat_golongan.pangkat_golongan_id
ORDER BY 
  ptk.nama ASC, rwy_kepangkatan.tmt_pangkat ASC";
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

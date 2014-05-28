<?php
require_once ("class-config.php");

class PTKTerdaftar
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
  ptk.ptk_id, 
  ptk.nama, 
  ptk_terdaftar.tahun_ajaran_id, 
  ptk_terdaftar.nomor_surat_tugas, 
  ptk_terdaftar.tanggal_surat_tugas, 
  ptk_terdaftar.ptk_induk, 
  ptk_terdaftar.tmt_tugas, 
  ptk_terdaftar.aktif_bulan_01, 
  ptk_terdaftar.aktif_bulan_02, 
  ptk_terdaftar.aktif_bulan_03, 
  ptk_terdaftar.aktif_bulan_12, 
  ptk_terdaftar.aktif_bulan_11, 
  ptk_terdaftar.aktif_bulan_10, 
  ptk_terdaftar.aktif_bulan_09, 
  ptk_terdaftar.aktif_bulan_08, 
  ptk_terdaftar.aktif_bulan_07, 
  ptk_terdaftar.aktif_bulan_06, 
  ptk_terdaftar.aktif_bulan_05, 
  ptk_terdaftar.aktif_bulan_04, 
  ptk_terdaftar.last_update, 
  ptk_terdaftar.last_sync, 
  ptk_terdaftar.tgl_ptk_keluar, 
  ptk_terdaftar.jenis_keluar_id
FROM 
  public.ptk_terdaftar, 
  public.ptk
WHERE 
  ptk_terdaftar.ptk_id = ptk.ptk_id
  AND ptk_terdaftar.tahun_ajaran_id = 2013
  AND ptk_terdaftar.jenis_keluar_id is null
ORDER BY
  ptk.nama ASC";
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

<?php
require_once ("class-config.php");

class RiwayatKGB
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
  riwayat_gaji_berkala.nomor_sk, 
  riwayat_gaji_berkala.tanggal_sk, 
  riwayat_gaji_berkala.tmt_kgb, 
  riwayat_gaji_berkala.masa_kerja_tahun, 
  riwayat_gaji_berkala.masa_kerja_bulan, 
  riwayat_gaji_berkala.gaji_pokok, 
  riwayat_gaji_berkala.last_update, 
  riwayat_gaji_berkala.last_sync, 
  riwayat_gaji_berkala.soft_delete
FROM 
  public.riwayat_gaji_berkala, 
  public.ptk, 
  ref.pangkat_golongan
WHERE 
  riwayat_gaji_berkala.ptk_id = ptk.ptk_id AND
  riwayat_gaji_berkala.pangkat_golongan_id = pangkat_golongan.pangkat_golongan_id
ORDER BY 
  ptk.nama ASC, riwayat_gaji_berkala.tmt_kgb ASC";
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

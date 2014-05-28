<?php
require_once ("class-config.php");

class KeaktifanPTK
{
	public $results;
	
	public function __construct() {
	}
	
	public function getResults(stdClass $params) {
		try	{
			$results = array();
			
			$db = Config::getInstance();
			$query = "SELECT * FROM ptk order by nama";
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

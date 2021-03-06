<?php
require('config-pd.php');
header('Content-Type: text/javascript');

// convert API config to Ext.Direct spec
$actions = array();
foreach ($API as $aname=>&$a) {
	$methods = array();
	foreach ($a['methods'] as $mname=>&$m) {
	    if (isset($m['len'])) {
		    $md = array(
			    'name'=>$mname,
			    'len'=>$m['len']
		    );
		} else {
		    $md = array(
		        'name'=>$mname,
		        'params'=>$m['params']
		    );
		}
		if (isset($m['formHandler']) && $m['formHandler']) {
			$md['formHandler'] = true;
		}
		$methods[] = $md;
	}
	$actions[$aname] = $methods;
}

$cfg = array(
    'url'=>'php/modules/pd/router-pd.php',
    'type'=>'remoting',
	'actions'=>$actions,
	'total'=>2200
);

echo 'Ext.ns("Ext.app"); Ext.app.REMOTING_API = ';

echo json_encode($cfg);
echo ';';

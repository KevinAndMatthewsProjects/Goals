<?php 
require_once('cps_simple.php');

// Connection hubs
// Note, replace 'api-eu' with appropriate Cloud server you use - 'api-us' or 'api-uk'

//var_dump($_POST);


$connectionStrings = array(
	'tcp://cloud-us-0.clusterpoint.com:9007',
	'tcp://cloud-us-1.clusterpoint.com:9007',
	'tcp://cloud-us-2.clusterpoint.com:9007',
	'tcp://cloud-us-3.clusterpoint.com:9007'
);

// Creating a CPS_Connection instance
$cpsConn = new CPS_Connection(
	new CPS_LoadBalancer($connectionStrings), 'DATABASENAME', 'USERNAME', 'PASSWORD', 'document',
	'//document/id', array('account' => ID)
);

$cpsConn2 = new CPS_Connection(
	new CPS_LoadBalancer($connectionStrings), 'DATABASENAME', 'USERNAME', 'PASSWORD', 'document',
	'//document/id', array('account' => ID)
);

$cpsSimple = new CPS_Simple($cpsConn);
$cpsSimple2 = new CPS_Simple($cpsConn2);

$query = CPS_Term($_POST["user"]);

$documents = $cpsSimple->search($query, 0, 1, array(), null);
//var_dump($documents);
$document = reset($documents);
$id = key($documents);
//echo $id;   
$goalPage = $cpsSimple2->retrieveSingle('size');

$newGoal = array(
	'title' => $_POST["title"],
	'description' => $_POST["description"],
	'milestones' => "",
	'achieved' => "false",
	'date' => $_POST["date"]
	
);

//var_dump($goalPage);
$goalPage->title ++;

$cpsSimple2->updateSingle('size', $goalPage);
$oldData = ($document->goals);
//echo($oldData);

$cpsSimple2->insertSingle((string)$goalPage->title, $newGoal);


var_dump($oldData);
$xml    = simplexml_load_string($oldData->asXML(), 'SimpleXMLElement', LIBXML_NOCDATA);

$array = json_decode(json_encode($xml), TRUE);
eval('$array = ' . reset($array) . ';');
array_push($array, (string)$goalPage->title);

ob_start();
var_export ($array);
$result = ob_get_clean();

$document->goals = $result;
$cpsSimple->updateSingle($id, $document);

header("Location: dashboard.php?user=" . $_POST["user"]);

?>

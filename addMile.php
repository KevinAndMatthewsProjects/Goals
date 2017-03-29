<?php 
require_once('cps_simple.php');

// Connection hubs
// Note, replace 'api-eu' with appropriate Cloud server you use - 'api-us' or 'api-uk'




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



$goal = $cpsSimple->retrieveSingle($_POST['id']);
$id = $_POST['id'];
$goalCounter = $cpsSimple->retrieveSingle('size');

$newGoal = array(
	'title' => $_POST["name"],
	'achieved' => "false",
	'date' => $_POST["date"]
	
);

//var_dump($goalPage);
$goalCounter->title+=1;
$cpsSimple->updateSingle('size', $goalCounter);
$oldData = ($goal->milestones);
var_dump($goalCounter);
$cpsSimple->insertSingle((string)$goalCounter->title, $newGoal);
echo("ohp");

var_dump($oldData);
$xml    = simplexml_load_string($oldData->asXML(), 'SimpleXMLElement', LIBXML_NOCDATA);

$array = json_decode(json_encode($xml), TRUE);
var_dump($array);
if(!empty($array)) {
eval('$array = ' . $array . ';');
} else {
    $array = array();
}
array_push($array, (string)$goalCounter->title);
var_dump($array);


ob_start();
var_export ($array);
$result = ob_get_clean();

$goal->milestones = $result;
$cpsSimple2->updateSingle($id, $goal);

header("Location: goals.php?id=" . $_POST["id"] . "&user=" . $_POST["user"]);

?>

<?php 
require_once('cps_simple.php');

// Connection hubs
// Note, replace 'api-eu' with appropriate Cloud server you use - 'api-us' or 'api-uk'

var_dump($_POST);

if($_POST["user"] == "") {
    header("Location: registerPage.php?info=Please+Enter+a+User+name");
    exit();
}

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

$cpsSimple = new CPS_Simple($cpsConn);

$query = CPS_Term($_POST["user"]);
$offset = 0;
$docs = 1;
$list = array();
$ordering =  null;

$documents = $cpsSimple->search($query, $offset, $docs, $list, $ordering);
if(sizeof($documents) == 0) {
	 header("Location: logInPage.php?info=Could+not+find+user");
}
// Looping through results
$document = reset($documents);
echo "\n" . $document->password;
echo " / ";
echo hash("sha256", $_POST["pass"]);
if($document->password == hash("sha256", $_POST["pass"])) {
	 header("Location: index.php?user=" . $_POST["user"]);
} else {
	 header("Location: logInPage.php?info=Incorrect+Password");
}
?>


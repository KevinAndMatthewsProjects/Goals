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
	new CPS_LoadBalancer($connectionStrings), 'DATEBASENAME', 'USER', 'PASS', 'document',
	'//document/id', array('account' => ID)
);

// Debug
//$cpsConn->setDebug(true);
// Creating a CPS_Simple instance
$cpsSimple = new CPS_Simple($cpsConn);

// Search for documents containing word "USA" in any of the fields AND field Population value > 25000000
$query = CPS_Term($_POST["user"]);



// Return documents starting with the first one - offset 0
$offset = 0;

// Return not more than 5 documents
$docs = 1;

// Do not list fields "Lat" and "Long" from the documents
$list = array();

// Order results by City_Urban_area field in ascending alphabetical order
$ordering =  null;

// Running the query and getting the results
$documents = $cpsSimple->search($query, $offset, $docs, $list, $ordering);
echo sizeof($documents);
if(sizeof($documents) > 0) {
    //already has that user
    header("Location: registerPage.php?info=That+user+name+has+been+taken");
    exit();
} else if($_POST["pass"] == "") {
    header("Location: registerPage.php?info=Please+Enter+a+Password");
    exit();
 } else {
    // Creating a new document
$document = array(
	'username' => $_POST["user"],
	'password' => hash("sha256",$_POST["pass"]),
	'goals' => var_export(array()),
	'points' => 0
	
);

// Insert
$cpsSimple->insertSingle(rand(0, getrandmax()), $document);
    header("Location: logInPage.php?info=Account+Created");
}

?>


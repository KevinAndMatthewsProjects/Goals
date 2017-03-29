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
	new CPS_LoadBalancer($connectionStrings), 'Goal', 'matthewpham55@gmail.com', 'Matthewpham200', 'document',
	'//document/id', array('account' => 102249)
);


$cpsSimple = new CPS_Simple($cpsConn);

$query = CPS_Term('*');

$documents = $cpsSimple->search($query, 0, 12, array('size' => 'no'), null);
//var_dump($documents);
?>

<!DOCTYPE html>
<meta charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet" type="text/css">
<style>
    div#frame {
    background: url(https://geeksretreat.files.wordpress.com/2013/09/cork-board.png) no-repeat;
    width: 800px;
    height: 600px;
    padding-top: 35px;
    padding-left: 35px;
}
    .note {
    width: 160px;
    height: 160px;
    box-shadow: 0 3px 6px rgba(0,0,0,.25);
    -webkit-box-shadow: 0 3px 6px rgba(0,0,0,.25);
    -moz-box-shadow: 0 3px 6px rgba(0,0,0,.25);
    float: left;
    margin: 8px;
    border: 1px solid rgba(0,0,0,.25);
}
 
.sticky0 {
	transform: rotate(-3.5deg);
	-webkit-transform: rotate(-3.5deg);
	-moz-transform: rotate(-3.5deg);
	background-color: white;
}

.sticky1 {
	transform: rotate(-3.5deg);
	-webkit-transform: rotate(-3.5deg);
	-moz-transform: rotate(-3.5deg);
	background-color: #CBFAFA;
}

.sticky2 {
	transform: rotate(1deg);
	-webkit-transform: rotate(1deg);
	-moz-transform: rotate(1deg);
	background-color: #FFF780;
}

.sticky3 {
	transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-moz-transform: rotate(0deg);
	background-color: #F8CDCD;
}

.sticky4 {
	transform: rotate(-2deg);
	-webkit-transform: rotate(-2deg);
	-moz-transform: rotate(-2deg);
	background-color: #F8CDCD;
}

.sticky5 {
	transform: rotate(-2deg);
	-webkit-transform: rotate(-2deg);
	-moz-transform: rotate(-2deg);
	transform: rotate(-2deg);
	background-color: #ffffff;
}

.pin {
	border-radius: 50%;
	width: 20px;
	height: 20px;
	-webkit-box-shadow: 0 3px 6px rgba(0,0,0,.55);
	-moz-box-shadow: 0 3px 6px rgba(0,0,0,.55);
	box-shadow: 0 3px 6px rgba(0,0,0,.55);
	margin: 0 auto;
	margin-top: 2px;
}

div#frame a:nth-child(1n) .pin {
	background-image: -moz-radial-gradient(35px 35px 35deg, circle cover, red 50%, black 100%);
	background-image: -webkit-radial-gradient(35px 35px, circle cover, red, black);
	background-image: radial-gradient(red 50%, black 100%);

}

div#frame a:nth-child(6n) .pin {
	background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, orange 50%, black 100%);
	background-image: -webkit-radial-gradient(45px 45px, circle cover, yellow, orange);
	background-image: radial-gradient(orange 50%, black 100%);
}

div#frame a:nth-child(3n) .pin {
	background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, yellow 50%, black 100%);
	background-image: -webkit-radial-gradient(45px 45px, circle cover, yellow, black);
	background-image: radial-gradient(yellow 50%, black 100%);
}

div#frame a:nth-child(5n+3) .pin,
div#frame a:last-child .pin {
	background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, blue 50%, white 100%);
	background-image: -webkit-radial-gradient(45px 45px, circle cover, blue, white);
	background-image: radial-gradient(blue 50%, white 100%);
}

.text {
    margin: 10px;
    font-family: 'The Girl Next Door', cursive;
}
div#frame a:hover.note {
    border: 1px solid rgba(0,0,0,.75);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1);
}
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>
<center>
    <h1>Public Goals</h1>
    
</center>
<ul class="topnav" id="myTopnav">
  <li><a class="active" href="#home">Home</a></li>
  <?php echo "<li><a href=\"dashboard.php?user=" . $_GET["user"] . "\">Personal Dashboard</a></li>" ?>
  <li><a href="#about">About</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>
<br>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<center>
<body>
       <div id ="frame">
           
           <?php
                foreach ($documents as $id => $document) {
                    echo("<a href=\"goals.php?id=" . $id . "&user="  . $_GET["user"] . "\" class=\"note sticky" .  rand(1,4) ."\">");   
                    echo("<div class='pin'></div>");
                    echo("<div class='text'>" . $document->title . "</div>");
                    echo("</a>");
                }
           ?>
           
        </div>
    </body>
    </center>
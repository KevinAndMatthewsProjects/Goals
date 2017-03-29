<?php
require_once('cps_simple.php');
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

$query = CPS_Term($_GET["user"]);
$offset = 0;
$docs = 1;
$list = array();
$ordering =  null;

$documents = $cpsSimple->search($query, $offset, $docs, $list, $ordering);
if(sizeof($documents) == 0) {
	 header("Location: index.html");
}
$document = reset($documents);
if($document->goals == "") {
     
} else {
  //  echo $document->goals;
    eval('$goals = ' . $document->goals . ";");
    
    $cpsConn2 = new CPS_Connection(
	new CPS_LoadBalancer($connectionStrings), 'DATABASENAME', 'USERNAME', 'PASSWORD', 'document',
	'//document/id', array('account' => ID)
    );
    
    $cpsSimple2 = new CPS_Simple($cpsConn2);
    


}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>User</span>Dashboard</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
	<?php  echo(" <li><a href=\"index.php?user=" . $_GET["user"] . "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg>Home</a></li> ") ?>
		
		<?php  echo(" <li><a href=\"forms.php?user=" . $_GET["user"] . "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Submit a Goal</a></li> ") ?>
			<li><a href="logInPage.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
			
				</ul>
			</li>
			
		</ul>
		<div class="attribution"><br/><a href="" style="color: #333;"></a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		<div class="container">
  
     

    
    <?php
    	if($goals != null) {
        foreach($goals as $index ) {
        $goalDoc = $cpsSimple2->retrieveSingle($index);

        //var_dump($goalDoc);
        	echo("<br><div class=\"jumbotron\">");
        //echo $index;

       // var_dump($goalDoc);
        //echo("<h>" . $goalDoc-> title . "</h>");
                echo("<a href=\"goals.php?id=" . $goalDoc->id . "&user=" . $_GET['user'] . "\">");
        echo(" <h1 style=\"font-size: 36px\" >" .  $goalDoc-> title  . "</h1>" );
        echo ("</a>");
        echo("<p style=\"font-size: 17px\">" .  $goalDoc->description  .  "</p>");
        echo("</div>");
        }
    }
    	?>
    
  </div>
</div>
	

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

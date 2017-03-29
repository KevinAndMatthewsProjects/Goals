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
    
  //  foreach($goals as $index ) {
        //echo $index;
  //      $goalDoc = $cpsSimple2->retrieveSingle($index);
  //      echo("<h>" . $goalDoc-> title . "</h>");
  //      
  //  }

}




?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Submit a Goal</title>

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
			<?php  echo(" <li><a href=\"dashboard.php?user=" . $_GET["user"] . "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> DashBoard</a></li> ") ?>
		
			<li class="active"><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Submit a Goal</a></li>
			<li><a href="logInPage.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
			
				</ul>
			</li>
			
		</ul>
			
		
			
		<div class="attribution"><a href="#"></a><br/><a href="#" style="color: #333;"></a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Goals</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Submit a Goal</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form action="/newGoalScript.php" method="post" role="form" id="formId">
							
								<div class="form-group">
									<label>Goal</label>
									<input name="title" class="form-control" placeholder="Title">
								</div>
																
								
								<div class="form-group">
									<label>Description of Goal</label>
									<textarea name="description" form="formId" class="form-control" rows="3"></textarea>
								</div>
									  <?php echo"<input type=\"hidden\" name=\"user\" value=\"" .  $_GET["user"] . "\">" ?>
								<label>Date</label>
								<input type="date" class="form-control" name="date">
							
								
								<button type="submit" class="btn btn-primary">Create</button>
								<button type="reset" class="btn btn-default">Reset</button>

								
							</div>
							<div class="col-md-6">
								
								
								

							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
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

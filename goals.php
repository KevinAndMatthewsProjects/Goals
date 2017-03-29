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

$cpsConn2 = new CPS_Connection(
	new CPS_LoadBalancer($connectionStrings), 'DATABASENAME', 'USERNAME', 'PASSWORD', 'document',
	'//document/id', array('account' => ID)
);

$cpsConn3 = new CPS_Connection(
	new CPS_LoadBalancer($connectionStrings), 'DATABASENAME', 'USERNAME', 'PASSWORD', 'document',
	'//document/id', array('account' => ID)
);

$cpsSimple = new CPS_Simple($cpsConn);
$cpsSimple2 = new CPS_Simple($cpsConn2);
$cpsSimple3 = new CPS_Simple($cpsConn3);
$document = $cpsSimple->retrieveSingle($_GET["id"]);


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Goal</title>

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
	<center><h1>Goal</h1></center>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<?php  echo(" <li><a href=\"dashboard.php?user=" . $_GET["user"] . "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Dashboard</a></li> ") ?>
		
		<?php  echo(" <li><a href=\"forms.php?user=" . $_GET["user"] . "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li> ") ?>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
			
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
    	

        //var_dump($goalDoc);
        	echo("<div class=\"jumbotron\">");
        //echo $index;

      // var_dump($goalDoc);
        //echo("<h>" . $goalDoc-> title . "</h>");
        echo(" <h1 style=\"font-size: 36px\" >" .  $document-> title  . "</h1>" );
        echo("<label> Description: </label>");
        echo("<p style=\"font-size: 17px\">" .  $document->description  .  "</p>");
        echo("<label>Date Of Goal: </label");
        echo("<p style=\"font-size: 17px\">" .  $document->date  .  "</p>");        
              
              if($document->milestones != "") {
              eval('$arrayStuff = ' . $document->milestones . ';');
              echo("<table>");
              echo("<tr>");
               foreach($arrayStuff as $index ) {
                    echo("<td>");
                    $goalDoc = $cpsSimple3->retrieveSingle($index);
                    echo("<label>Mile Stones:</label>");
                    echo("<p>" . $goalDoc->title . "</p>");
                    echo("<label>Milestone Goal:</label>");
                    echo("<p>" . $goalDoc->date . "</p>");
                    echo("</td>");
               }
               echo("</tr>");
               echo("</table>");
              }
        
        $users = $cpsSimple2->search(CPS_Term($_GET["user"]), 0, 1, array(), null);
        $user = reset($users);
       // var_dump($user);
        if($user == null) {
          exit();
        }
        $xml    = simplexml_load_string($user->asXML(), 'SimpleXMLElement', LIBXML_NOCDATA);
    
        $array = json_decode(json_encode($xml), TRUE);
        //var_dump($array['goals']);
        if($array['goals']) {
        eval('$array = ' . $array['goals'] . ';');
        if(in_array($_GET['id'], $array)) {
          echo("<form action=\"addMile.php\" method=\"post\"/>"); 
        
          echo("<input type=\"hidden\" name=\"id\" value=\"" . $_GET['id'] . "\"/>"); 
          echo("<input type=\"hidden\" name=\"user\" value=\"" . $_GET['user'] . "\"/>"); 
          echo("<label>Name</label>");
          echo("<input type=\"text\" name=\"name\"/>"); 
        echo("<label>Goal</label>");
           echo("<input type=\"date\" name=\"date\"/>");       
         echo("<input type=\"submit\"/>");      
          echo("</form>");
            
        } }
                echo("</div>");
     	?>    
    
    <!-- Begin Comments JavaScript Code --><script type="text/javascript" async>function ajaxpath_589745e4c3ed6(url){return window.location.href == '' ? url : url.replace('&s=','&s=' + escape(window.location.href));}(function(){document.write('<div id="fcs_div_589745e4c3ed6"><a title="free comment script" href="http://www.freecommentscript.com">&nbsp;&nbsp;<b>Free HTML User Comments</b>...</a></div>');fcs_589745e4c3ed6=document.createElement('script');fcs_589745e4c3ed6.type="text/javascript";fcs_589745e4c3ed6.src=ajaxpath_589745e4c3ed6((document.location.protocol=="https:"?"https:":"http:")+"//www.freecommentscript.com/GetComments2.php?p=589745e4c3ed6&s=#!589745e4c3ed6");setTimeout("document.getElementById('fcs_div_589745e4c3ed6').appendChild(fcs_589745e4c3ed6)",1);})();</script><noscript><div><a href="http://www.freecommentscript.com" title="free html user comment box">Free Comment Script</a></div></noscript><!-- End Comments JavaScript Code -->
    
  </div>
</div>

		

								
		

        </div>
      </div>
    </div>
       <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <script>
      function ChatController($scope) {
        var socket = io.connect();

        $scope.messages = [];
        $scope.roster = [];
        $scope.name = '';
        $scope.text = '';

        socket.on('connect', function () {
          $scope.setName();
        });

        socket.on('message', function (msg) {
          $scope.messages.push(msg);
          $scope.$apply();
        });

        socket.on('roster', function (names) {
          $scope.roster = names;
          $scope.$apply();
        });

        $scope.send = function send() {
          console.log('Sending message:', $scope.text);
          socket.emit('message', $scope.text);
          $scope.text = '';
        };

        $scope.setName = function setName() {
          socket.emit('identify', $scope.name);
        };
      }
    </script>
  </head>
  
    <script src="/socket.io/socket.io.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
  </body>
    <script src="/socket.io/socket.io.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
  </body>
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

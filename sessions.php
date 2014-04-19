<?php 
$dpt1 = 'instructional technology';
$dpt2 = 'STEM';
$message = '';
$db = new MySQLi('localhost','si','si', 'SI_TestDB');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sql1 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt1' ORDER BY `TABLE 1`.`Title` ASC ";
		$results1 = $db->query($sql1);
		$sql2 = "SELECT * FROM  `TABLE 1` WHERE  `Department` LIKE '$dpt2' ORDER BY `TABLE 1`.`Title` ASC ";
		$results2 = $db->query($sql2);

}
if ($db->error) {
		$message = $db->error;
		echo $message;
	}

?> 
<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>CMS Summer Institute 14</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Transforming Learning for Every Student">
<!-- Not sure about "viewport" -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


	<link rel="shortcut icon" href="favicon.ico"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<style>
	  body {
		padding-top: 60px;
	  }
	</style>
		<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  </head>

<body>
<!--navbar top -->
<div class="row">
<nav class="navbar navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="center">
			<div class="navbar-header">
			
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		
	  </button>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-collapse-1">
	<ul class="nav navbar-nav center">		
			<li><a href="./"><h4>Home</h4></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><h4>Sessions by Date</h4></a>
				<ul class="dropdown-menu">
					<li><a href="#">June 16th</a></li>
					<li><a href="#">June 17th</a></li>
					<li><a href="#">June 18th</a></li>
					<li><a href="#">June 19th</a></li>
					<hr>
					<li><a href="#">June 23rd</a></li>
					<li><a href="#">June 24th</a></li>
					<li><a href="#">June 25th</a></li>
					<li><a href="#">June 26th</a></li>
				</ul>
			</li>									
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><h4>Extras</h4></a>
				<ul class="dropdown-menu">
					<li><a href="#">Maps</a></li>
					<li><a href="#">ASEP Camp</a></li>
				</ul>
			</li>	
	</ul>
</div>

<div>
	<ul class="nav nav-tabs">								
			<li class="active"><a href="#IT" data-toggle="tab"><?php echo strtoupper($dpt1)?></a></li>
			<li><a href="#STEM" data-toggle="tab"><?php echo strtoupper($dpt2)?></a></li>	
	</ul>
</div>
	
</div>
	</div>
</nav>
</div>
<!--content-->
<div class="tab-content purple">	
<div class="tab-pane active purple" id="IT">
	<br><br><br><br><br><br><br><br>
	<div class="container">
		<div class="center">
			<h1><?php echo strtoupper($dpt1)?></h1>
		</div>
	</div>
	<div class="purple">
<?php 
		$i = 0;
		while ($row = $results1->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<div class="row">
			<?php } ?>
				<div class="col-md-4 purple">
     					<div class="blue card">
					<h3><?php echo $row['Title']; ?>
			    	</h3>
      					<div class="description">
        				<h4><i><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></i></h4>
						<h5><?php echo strtoupper($row['Department']); ?></h5>
						<hr>
						<p><?php echo $row['Description']; ?></p>
						<div class="center"> <button type="button" class="btn btn-danger">Register</button></div>
					</div>
				</div>  
				</div>
			<?php $i++;
			if ($i % 3 === 0) { ?>
			</div>
			<br>
			<?php }  //endif
			} //end loop ?>  
</div>

</div>

<div class="tab-pane purple" id="STEM">
	<br><br><br><br><br><br><br><br>
	<div class="container">
		<div class="center">
			<h1><?php echo strtoupper($dpt2)?></h1>
		</div>
	</div>
<div class="purple">
<?php 
		$i = 0;
		while ($row = $results2->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<div class="row">
			<?php } ?>
				<div class="col-md-4 purple">
     					<div class="blue card">
					<h3><?php echo $row['Title']; ?>
			    	</h3>
      					<div class="description">
        				<h4><i><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></i></h4>
						<h5><?php echo strtoupper($row['Department']); ?></h5>
						<hr>
						<p><?php echo $row['Description']; ?></p>
						<div class="center"> <button type="button" class="btn btn-danger">Register</button></div>
					</div>
				</div>  
				</div>
			<?php $i++;
			if ($i % 3 === 0) { ?>
			</div>
			<br>
			<?php }  //endif
			} //end loop ?>  
</div>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><hr>
<br><br><br><br><br><br><hr>
</div>
</div>


<!--footer fixed-->
	<footer>
		<div class="white full">
			<div class="container center">
				<div class="row">
					<div class="col-xs-3"><img src="images/cms.png" class="center img-responsive padding10"></div>
					<div class="col-xs-3"><img src="images/cpcc.png" class="center img-responsive padding10"></div>
					<div class="col-xs-2" style="vertical-align:middle">
								<a href="https://twitter.com/cmstothecore" target="_blank"><img src="images/twitter.png" style="vertical-align:middle" class="center img-responsive"> 
					</div>
					<div class="col-xs-2">
								<a href="https://www.facebook.com/pages/CMSlearns/252786364864618?ref=hl" target="_blank"><img src="images/facebook.jpg" class="center img-responsive">
					</div>
					<div class="col-xs-2">	
								<a href="https://www.youtube.com/channel/UCLplAkn21MPkCbjz_JOCaLA" target="_blank"><img src="images/youtube.png" class="center img-responsive">							
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
<!-- javaScript-->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="javascript" type="text/javascript" >
    $(document).ready(function(){
      // add 30 more rows to the table
      var row = $('table#mytable > tbody > tr:first');
      var row2 = $('table#mytable2 > tbody > tr:first');
      	for (i=0; i<30; i++) {
        	$('table#mytable > tbody').append(row.clone());
        	$('table#mytable2 > tbody').append(row2.clone());
      	}	
 
      	// make the header fixed on scroll
      	$('.table-fixed-header').fixedHeader();
    	});
  </script>
</body>
</html>
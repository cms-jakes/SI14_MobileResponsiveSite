<?php 
$message = '';
$db = new MySQLi('localhost','si','si', 'SI_TestDB');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
	$sql = "SELECT * FROM  `TABLE 1`" ;
	$results = $db->query($sql);
	if ($db->error) {
		$message = $db->error;
	}
}
?> 

<?php include "includes/header.php"; ?>

<body id="template">

<br><br>

<?php include "includes/secondaryhead.php"; ?>

<div>
	<?php if($message) {
		echo"<h1>$message</h1>";
	} ?>

<!-- Schedule DB -->
<div class="purple" id="DB">
	<div class="container">
		<div class="center">
			<h1>Sessions by Title</h1>
			<h4 class="f"></h4>
		</div>
		<?php while ($row = $results->fetch_assoc()) { ?>
		<div class="panel-group" id="accordion">
  			<div class="panel panel-default">
   				<div class="panel-heading">
     			<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['ID']; ?>">
          					<?php echo $row['Title']; ?>
        				</a>
			    </h4>
    		</div>
    	</div>
    		<div id="collapse<?php echo $row['ID']; ?>" class="panel-collapse collapse">
      			<div class="panel-body">
        			<h3><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h3>
					<h4><?php echo $row['Department']; ?></h4>
					<hr>
					<p><?php echo $row['Description']; ?></p>
				</div>
    		</div>
  		</div>
  		<?php } ?>
<!--		
		<table class="table table-bordered table-responsive db header-fixed" id="mytable">
			<thead class="header"><tr><th colspan="2">Title<br>Presenter / CCSS / Description</th></tr></thead>
			<?php while ($row = $results->fetch_assoc()) { ?>
				<tr>
					<td colspan="2" class="left"><h3><?php echo $row['Title']; ?></h3></td>
				</tr>
				<tr>
					<td><?php echo $row['PrimaryPresenter']; ?><br><?php echo $row['SecondPresenter']; ?></td>
					<td><?php echo $row['Department']; ?></td>
				</tr>
				<tr>	
					<td colspan="2" class="left description"><?php echo $row['Description']; ?></td>					
				</tr>
				<tr>
				</tr>
			<?php }  ?>			
		</table>
-->
	
</div>
</div>
<!-- Schedule Format-->
<div class="blue" id="sessionsFormat">&nbsp<br><br>
	
	
	<div class="center">
		<h1>Sessions Format: Week 1</h1>
		<h4 class="f">Session descriptions will post soon!</h4>
	</div>
	
	<table class="table table-responsive ">										
		<thead><tr><th>	Time	</th><th id="June 16th">	Monday<br>June 16th	</th><th id="June 17th">	Tuesday<br>June 17th	</th><th>	Wednesday<br>June 18th	</th><th>	Thursday<br>June 19th	</th></tr></thead>
		<tr><td>	8:30-10:00	</td><td>	Welcome<sup>*</sup> & Keynote:<br> Dr. Morrison	</td><td>	Keynote:<br>Dr. Heidi Jacobs	</td><td>	Keynote:<br>Jaime Casap, Google	</td><td>	Keynote:<br> Lynell Burmark	</td></tr>
		<tr><td>	10:00-10:10	</td><td>	break	</td><td>	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	10:10-11:40	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	11:40-12:40	</td><td>	lunch	</td><td>	lunch	</td><td>	lunch	</td><td>	lunch	</td></tr>
		<tr><td>	12:40-2:10	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	2:10-2:20	</td><td>	break	</td><td>	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	2:20-3:50	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td colspan="5"><sup>*</sup> June 16th: Breakfast 8:00-9:00 before Dr. Morrison's Welcome Keynote</td></tr>
	</table>	
	<hr class="hrThick">
	<div class="center">
		<h1>Sessions Format: Week 2</h1>
		<h4 class="f">Session descriptions will post soon!</h4>
	</div>

	<table class="table table-responsive ">										
		<thead><tr><th>	Time	</th><th id="June 23rd">	Monday<br>June 23rd	</th><th class="gci" id="June 24th">	Tuesday<br>June 24th<br><h4 class="redtxt">Global Competency Institute</h4>	</th><th>	Wednesday<br>June 25th	</th><th>	Thursday<br>June 26th	</th></tr></thead>
		<tr><td>	8:30-10:00	</td><td>	sessions	</td><td class="gci">	Keynote:<br>Dr. Tim Flood<br>	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	10:00-10:10	</td><td>	break	</td><td class="gci">	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	10:10-11:40	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	11:40-12:40	</td><td>	lunch	</td><td class="gci">	lunch	</td><td>	lunch	</td><td>	lunch	</td></tr>
		<tr><td>	12:40-2:10	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	2:10-2:20	</td><td>	break	</td><td class="gci">	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	2:20-3:50	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
	</table>	
	<br><br>

<!-- 
<div class="blue">
<div class="blue schedule" id="June 17th">
	<div class="container">
		<h1>June 17th</h1>
	</div>

</div></div>
<div class="blue">
<div class="blue schedule" id="June 18th">
	<div class="container">
		<h1>June 18th</h1>
	</div>
</div>
-->
<!-- June 19th -->
<!-- June 23rd -->
<!-- June 24th -->
<!-- June 25th -->
<!-- June 26th -->

</div>
<!--Technology -->
<div class="red" id="devices">&nbsp<br>
	<div>
	<div class="container">
	<h1>Technology</h1>
		<div class="row">
			<div class="col-xs-2"><h2 class="fa fa-signal fa-4x"></h2></div>
			<div class="col-xs-10"><h2> CPCC has a secure guest network that you will be able to connect to with your own device.</h2></div>
		</div>
		<div class="row">
			<div class="col-xs-2"><h2 class="fa fa-laptop fa-4x"></h2></div> 
			<div class="col-xs-10"><h2>Most sessions will expect users to have a device. Please bring your CMS issued<sup>*</sup> or personal device (laptop or tablet).</h2></div>
		</div>
		<div class="row">  
			<div class="col-xs-offset-2"><h3><sup>*</sup>Talk to your school's leadership for more details about CMS issued devices.</h3></div>
		</div>		
</div>
</div>
</div>
<div class="white">
<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>
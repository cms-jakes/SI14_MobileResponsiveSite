<?php 
$date= "June 26th";
include "includes/callDate.php"; 
include "includes/callCanceled.php";
?>

<?php include "includes/header.php"; ?>

<body id="June26th">

<br><br>

<?php include "includes/secondaryhead.php"; ?>
<div>

<section class="purple">
	<h1 class="center">Schedule for June 26th</h1>	
	<hr>
	<div class="container canceled red well-sm">
		<h4 ><i class="fa fa-warning"></i> The following sessions have been canceled <i class="fa fa-warning"></i></h4>
		<ul>
		<?php 
		$i = 0;
		while ($row = $resultsCan->fetch_assoc()) { ?>
						<li><?php echo $row['StartTime'] ?>  <?php echo $row['Title'] ?></li>					
							<?php $i++;
			} //end loop ?>  
		</ul>		
	</div> <!-- Canceled -->	
	<hr>
		<div class="navbar center">
      	<ul class="nav navbar-nav">
			<li><a href="#830AM" data-toggle="tab">8:30 AM</a></li>			
			<li><a href="#1010AM" data-toggle="tab">10:10 AM</a></li>
			<li><a href="#1240PM" data-toggle="tab">12:40 PM</a></li>
			<li><a href="#220PM" data-toggle="tab">2:20 PM</a></li>
		</ul>
		</div><!--collapse navbar-collapse -->
</section><!--purple center-->

<?php include "includes/sqlTimes.php" ?>

<br><br><br><br>
</div><!--ByDate-->



<br><br>
</div>
<?php include "includes/footer.php" ?>




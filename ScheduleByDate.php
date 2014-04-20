<?php include "includes/callDBbyDate.php"; ?>

<?php include "includes/header.php"; ?>

<body id="ScheduleByDate">

<br><br>

<?php include "includes/secondaryhead.php"; ?>

<div id="ByDate">
<section class="purple center">
	<h1>Schedule by Date</h1>	
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
      	<ul class="nav navbar-nav">
			<li><a href="#<?php echo str_replace(' ','',$j16) ?>"><?php echo strtoupper($j16) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j17) ?>"><?php echo strtoupper($j17) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j18) ?>"><?php echo strtoupper($j18) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j19) ?>"><?php echo strtoupper($j19) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j23) ?>"><?php echo strtoupper($j23) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j24) ?>"><?php echo strtoupper($j24) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j25) ?>"><?php echo strtoupper($j25) ?></a></li>
			<li><a href="#<?php echo str_replace(' ','',$j26) ?>"><?php echo strtoupper($j26) ?></a></li>						
			<li><a href="#<?php echo str_replace(' ','',$j0) ?>"><?php echo strtoupper($j0) ?></a></li>	
		</ul>
		</div><!--collapse navbar-collapse -->
</section><!--purple center-->

<?php include "includes/sqlByDate.php" ?>

<br><br><br><br>
</div><!--ByDate-->



<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>




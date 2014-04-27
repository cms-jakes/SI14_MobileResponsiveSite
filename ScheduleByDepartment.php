<?php include "includes/callDB.php" ?>
<!-- STOP -->

<?php include "includes/header.php"; ?>

<body id="ScheduleByDepartment">

<br><br>

<?php include "includes/secondaryhead.php"; ?>

<div id="ByDepartment">
<section class="purple center">
	<h1>Sessions by Department</h1>
	<div class="collapse navbar-collapse" style="border:1px" id="navbar-collapse-1">
      	<ul class="nav navbar-nav">
          	<li><a href="#<?php echo str_replace(' ','',$dpt1) ?>"><?php echo strtoupper($dpt1) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt2) ?>"><?php echo strtoupper($dpt2) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt3) ?>"><?php echo strtoupper($dpt3) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt4) ?>"><?php echo strtoupper($dpt4) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt5) ?>"><?php echo strtoupper($dpt5) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt6) ?>"><?php echo strtoupper($dpt6) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt7) ?>"><?php echo strtoupper($dpt7) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt8) ?>"><?php echo strtoupper($dpt8) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt9) ?>"><?php echo strtoupper($dpt9) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt10) ?>"><?php echo strtoupper($dpt10) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt11) ?>"><?php echo strtoupper($dpt11) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt12) ?>"><?php echo strtoupper($dpt12) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt13) ?>"><?php echo strtoupper($dpt13) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt14) ?>"><?php echo strtoupper($dpt14) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt15) ?>"><?php echo strtoupper($dpt15) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt16) ?>"><?php echo strtoupper($dpt16) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt17) ?>"><?php echo strtoupper($dpt17) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt18) ?>"><?php echo strtoupper($dpt18) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt19) ?>"><?php echo strtoupper($dpt19) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt20) ?>"><?php echo strtoupper($dpt20) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt21) ?>"><?php echo strtoupper($dpt21) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt22) ?>"><?php echo strtoupper($dpt22) ?></a></li>
 
    	</ul>
	</div> <!-- Departments navigation -->
</section>

<?php include "includes/sqlDepartmentTemplate.php" ?>
<br><br><br><br>
</div><!--ByDepartment-->



<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>




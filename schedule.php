<?php include "includes/callDB.php" ?>
<!-- STOP -->

<?php include "includes/header.php"; ?>

<body id="schedule">

<br><br>

<?php include "includes/secondaryhead.php"; ?>

<div id="ByDepartment">
<section class="purple center">
	<h1>Sessions by Department</h1>
	<div class="collapse navbar-collapse" id="navbar-collapse-1">
      	<ul class="nav navbar-nav">
          	<li><a href="#<?php echo str_replace(' ','',$dpt1) ?>"><?php echo strtoupper($dpt1) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt2) ?>"><?php echo strtoupper($dpt2) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt3) ?>"><?php echo strtoupper($dpt3) ?></a></li>
          	<li><a href="#<?php echo str_replace(' ','',$dpt4) ?>"><?php echo strtoupper($dpt4) ?></a></li>
 
    	</ul>
	</div> <!-- Departments navigation -->
</section>

<?php include "includes/sqlDepartmentTemplate.php" ?>
<br><br><br><br>
</div><!--ByDepartment-->



<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>




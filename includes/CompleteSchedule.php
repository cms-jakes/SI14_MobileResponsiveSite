<?php 
include "includes/callAllDates.php"; 
?>

<?php include "includes/header.php"; ?>

<body class="white">

<br><br>

<?php include "includes/secondaryhead.php"; ?>

<div class="white">
<section class="center white">

</section><!--center-->

<section id="830AM" class="white">
<br><br>
<h1>June 16th</h1>	
<h2 class="center">8:30 AM</h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results816->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<h4><?php echo $row['Title'] ?></h4>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
     				</section><!-- well-->
     				<br>
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="10:10AM" class="white">
<br><br>
<h1>June 16th</h1>	
<h2 class="center">10:10 AM</h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1016->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<h4><?php echo $row['Title'] ?></h4>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
     				</section><!-- well-->
     				<br>
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<br><br><br><br>
</div><!--ByDate-->



<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>




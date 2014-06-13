<?php 
include "includes/callAllDates.php"; 
?>

<?php include "includes/header.php"; ?>

<body id="white">

  

<?php include "includes/secondaryhead.php"; ?>
<div class="purple center">
	<h1>Complete list of sessions by date and time</h1>
		<div class="navbar">
      	<ul class="nav navbar-nav">
			<li><a href="#16th">16th</a></li>			
			<li><a href="#17th">17th</a></li>
			<li><a href="#18th">18th</a></li>
			<li><a href="#19th">19th</a></li>
			<li><a href="#23rd">23rd</a></li>			
			<li><a href="#24th">24th</a></li>
			<li><a href="#25th">25th</a></li>
			<li><a href="#26th">26th</a></li>			
		</ul>
		</div><!--navbar -->
</div>

<div>

<section id="16th" class="white center">
<h1>June 16th</h1>	
<section id="830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results816->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="10:10AM" class="white">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1016->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="1240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1216->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results216->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--16th-->

<section id="17th" class="gray center">
<h1>June 17th</h1>	
<section id="830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results817->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="10:10AM" >
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1017->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="1240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1217->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results217->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--17th-->

<section id="18th" class="white center">
<h1>June 18th</h1>	
<section id="830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results818->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><strong><?php echo $row['Title'] ?></strong><br>
						<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?><br>
						<?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></p>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="10:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1018->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="1240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1218->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results218->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--18th-->

<section id="19th" class="gray center">
<h1>June 19th</h1>	
<section id="19830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results819->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     
     				</section><!-- well-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="1910:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1019->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
       				</section><!-- well-->

				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="191240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1219->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="19220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results219->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
      				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--19th-->

<section id="23rd" class="white center">
<h1>June 23rd</h1>	
<section id="23830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results823->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="2310:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1023->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
       				</section><!-- well-->

				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="231240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1223->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="23220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results223->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
      				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--23rd-->

<section id="24th" class="gray center">
<h1>June 24th</h1>	
<section id="24830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results824->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="2410:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1024->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
       				</section><!-- well-->

				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="241240AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1224->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="24220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results224->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
      				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--24th-->

<section id="25th" class="white center">
<h1>June 25th</h1>	
<section id="25830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results825->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     
     				</section><!-- well-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="2510:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1025->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
       				</section><!-- well-->

				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="251250AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1225->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="25220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results225->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
      				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--25th-->

<section id="26th" class="gray center">
<h1>June 26th</h1>	
<section id="26830AM">
  
<h3 class="center">8:30 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results826->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
     				</section><!-- well-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section id="2610:10AM">
  
<h3 class="center">10:10 AM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1026->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
       				</section><!-- well-->

				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section id="261260AM">
  
<h3 class="center">2:10 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results1226->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										

     				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section id="26220AM">
  
<h3 class="center">3:50 PM</h3>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results226->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well well-sm">
						<p><?php echo $row['Title'] ?></p>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>
						<h6><?php echo $row['Building'] ?> : <?php echo $row['Room'] ?></h6>     										
     										
      				</section><!-- well-->
     				 
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section>  <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM2 -->
</section><!--26th-->
  <br><br><br><br><br><br><hr> 
</div><!--ByDate-->



    
</div>
<?php include "includes/footer.php" ?>




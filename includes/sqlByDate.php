<section class="results16 ltpurple" id="<?php echo str_replace(' ','',$j16)?>">
<br><br>
<h2 class="center"><?php echo ($j16)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results16->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j16) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j16) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls16 -->

<section class="results17 ltpurple" id="<?php echo str_replace(' ','',$j17)?>">
<br><br>
<h2 class="center"><?php echo ($j17)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results17->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j17) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j17) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls17 -->

<section class="results18 ltpurple" id="<?php echo str_replace(' ','',$j18)?>">
<br><br>
<h2 class="center"><?php echo ($j18)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results18->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j18) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j18) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls18 -->

<section class="results19 ltpurple" id="<?php echo str_replace(' ','',$j19)?>">
<br><br>
<h2 class="center"><?php echo ($j19)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results19->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j19) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j19) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls19 -->

<!-- end week 1 -->

<section class="results23 ltpurple" id="<?php echo str_replace(' ','',$j23)?>">
<br><br>
<h2 class="center"><?php echo ($j23)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results23->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j23) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j23) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls23 -->

<section class="results24 ltpurple" id="<?php echo str_replace(' ','',$j24)?>">
<br><br>
<h2 class="center"><?php echo ($j24)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results24->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j24) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j24) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls24 -->

<section class="results25 ltpurple" id="<?php echo str_replace(' ','',$j25)?>">
<br><br>
<h2 class="center"><?php echo ($j25)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results25->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j25) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j25) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls25 -->

<section class="results26 ltpurple" id="<?php echo str_replace(' ','',$j26)?>">
<br><br>
<h2 class="center"><?php echo ($j26)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results26->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j26) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j26) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls26 -->

<!-- end week 2 -->

<section class="results0 ltpurple" id="<?php echo str_replace(' ','',$j0)?>">
<br><br>
<h2 class="center"><?php echo ($j0)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results0->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$j0) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$j0) ?><?php echo $i ?>" class="panel-collapse collapse">
      							<div class="panel-body">			      					
	        				<h4><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h4>
							<h5><?php echo $row['Date']; ?> <br> From <?php echo $row['StartTime'] ?> to <?php echo $row['EndTime']?></h5>
							<hr>
							<?php echo $row['Description']; ?>
							</div><!-- panel-body -->
							</div><!--panel-collapse collapse-->
							</div><!--panel panel-default-->
						<div><br> <a href="http://calendar.google.com" target="_blank"><button type="button" class="btn btn-danger">Add to Calendar</button></a><br></div>
						</div><!--panel-group-->
					</section> <!-- blue card -->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- restuls0 -->


<!-- end unpaired resutls-->
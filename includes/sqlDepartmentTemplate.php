<section class="results1 ltpurple" id="<?php echo str_replace(' ','',$dpt1)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt1)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results1->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt1) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt1) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results1 -->
<div class="up purple">
	<a href="#top">
		<button type="button" class="btn btn-default btn-lg purple">
		<span class="glyphicon glyphicon-arrow-up "></span>
		</button>
	</a>	
</div><!-- up -->
<section class="results2 ltpurple" id="<?php echo str_replace(' ','',$dpt2) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt2)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results2->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt2) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt2) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results2-->

<section class="results3 ltpurple" id="<?php echo str_replace(' ','',$dpt3) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt3)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results3->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt3) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt3) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results3-->

<section class="results4 ltpurple" id="<?php echo str_replace(' ','',$dpt4) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt4)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results4->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt4) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt4) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results4-->

<section class="results5 ltpurple" id="<?php echo str_replace(' ','',$dpt5)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt5)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results5->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt5) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt5) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results1 -->

<section class="results6 ltpurple" id="<?php echo str_replace(' ','',$dpt6) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt6)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results6->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt6) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt6) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results6-->

<section class="results7 ltpurple" id="<?php echo str_replace(' ','',$dpt7) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt7)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results7->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt7) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt7) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results7-->

<section class="results8 ltpurple" id="<?php echo str_replace(' ','',$dpt8) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt8)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results8->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt8) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt8) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results8-->

<section class="results9 ltpurple" id="<?php echo str_replace(' ','',$dpt9)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt9)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results9->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt9) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt9) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results9 -->

<section class="results10 ltpurple" id="<?php echo str_replace(' ','',$dpt90) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt10)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results10->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt10) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt10) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results10-->

<section class="results11 ltpurple" id="<?php echo str_replace(' ','',$dpt11) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt11)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results11->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt11) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt11) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results11-->

<section class="results12 ltpurple" id="<?php echo str_replace(' ','',$dpt12) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt12)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results12->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt12) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt12) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results12-->

<section class="results13 ltpurple" id="<?php echo str_replace(' ','',$dpt13)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt13)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results13->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt13) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt13) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results9 -->

<section class="results14 ltpurple" id="<?php echo str_replace(' ','',$dpt14) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt14)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results14->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt14) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt14) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results14-->

<section class="results15 ltpurple" id="<?php echo str_replace(' ','',$dpt15) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt15)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results15->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt15) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt15) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results15-->

<section class="results16 ltpurple" id="<?php echo str_replace(' ','',$dpt16) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt16)?></h2>
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
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt16) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt16) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results16-->

<section class="results17 ltpurple" id="<?php echo str_replace(' ','',$dpt17)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt17)?></h2>
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
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt17) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt17) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results17 -->

<section class="results18 ltpurple" id="<?php echo str_replace(' ','',$dpt18) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt18)?></h2>
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
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt18) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt18) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results18-->

<section class="results19 ltpurple" id="<?php echo str_replace(' ','',$dpt19) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt19)?></h2>
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
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt19) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt19) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results19-->

<section class="results20 ltpurple" id="<?php echo str_replace(' ','',$dpt20) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt20)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results20->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt20) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt20) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results20-->

<section class="results21 ltpurple" id="<?php echo str_replace(' ','',$dpt21)?>">
<br><br>
<h2 class="center"><?php echo strtoupper($dpt21)?></h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results21->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt21) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
    						<div id="<?php echo str_replace(' ','',$dpt21) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results17 -->

<section class="results22 ltpurple" id="<?php echo str_replace(' ','',$dpt22) ?>">
<br><br><h2 class="center"><?php echo strtoupper($dpt22)?></h2>
<div class="container">
<?php 
		$i = 0;
		while ($row = $results22->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="blue card">
						<div class="panel-group" id="accordion">
  							<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        							<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ','',$dpt22) ?><?php echo $i ?>">
          							 	<?php echo $row['Title']; ?>  <span class="caret"></span>
          					       </a>
      							</h4>
    						</div><!--panel-heading-->
     						<div id="<?php echo str_replace(' ','',$dpt22) ?><?php echo $i ?>" class="panel-collapse collapse">
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
</section><!-- results22-->

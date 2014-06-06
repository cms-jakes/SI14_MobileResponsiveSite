<div class="tab-content">
<section class="AM8 ltpurple tab-pane active" id="830AM">
<br><br>
<h2 class="center">8:30 AM</h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results8->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well blue well-sm">
						<h4><?php echo $row['Title'] ?></h4>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
						<h5><i><?php echo $row['Building'] ?> <?php echo $row['Room'] ?></i></h5>
<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['KEY']?>">
		Details        
</button>

<!-- Modal -->
<div class="modal purple fade" id="<?php echo $row['KEY']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel"><?php echo $row['Title'] ?></h3>
      </div>
      <div class="modal-body blue">
        <h4><?php echo $row['StartDate'] ?><br>
			<?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h4>
        <h4>
        	<?php echo $row['PrimaryPresenter']?>&nbsp; &nbsp;<?php echo $row['SecondPresenter']?>
			<br>
</h4></h5>			Building: <?php echo $row['Building']?> &nbsp; &nbsp; Room: <?php echo $row['Room']?>
                 </h5>
        	
        <hr>
        <?php echo $row['Description'] ?>
      </div>
      <div class="modal-footer blue">
        <button type="button" class="btn btn-link" data-dismiss="modal">Back</button>
        <a href="<?php echo $row['AddToCalendar']?>" target="_blank" class="btn btn-danger">Add to Your Google Calendar</a>
<br><i>NOTE: Seating is limited and adding sessions to your Google Calendar does not reserve a seat at the session. Adding to your calendar is for your planning purposes only.</i>

      </div>
    </div>
  </div>
</div><!-- Modal-->
     				</section><!--blue well-->
     				<br>
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM8 -->

<section class="AM10 ltpurple tab-pane" id="1010AM">
<br><br>
<h2 class="center">10:10 AM</h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results10->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well blue well-sm">
						<h4><?php echo $row['Title'] ?></h4>
 						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['KEY']?>">
		Details        
</button>

<!-- Modal -->
<div class="modal purple fade" id="<?php echo $row['KEY']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel"><?php echo $row['Title'] ?></h3>
      </div>
      <div class="modal-body blue">
        <h4><?php echo $row['StartDate'] ?><br><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h4>
        <h4>        	
        	<?php echo $row['PrimaryPresenter']?>&nbsp; &nbsp;<?php echo $row['SecondPresenter']?>
			<br>
		</h4>
		<h5>Building: <?php echo $row['Building']?> &nbsp; &nbsp; Room: <?php echo $row['Room']?>
        </h5>
        <?php echo $row['Description'] ?>
      </div>
      <div class="modal-footer blue">
        <button type="button" class="btn btn-link" data-dismiss="modal">Back</button>
        <a href="<?php echo $row['AddToCalendar']?>" target="_blank" class="btn btn-danger">Add to Your Google Calendar</a>
<br><i>NOTE: Seating is limited and adding sessions to your Google Calendar does not reserve a seat at the session. Adding to your calendar is for your planning purposes only.</i>

      </div>
    </div>
  </div>
</div><!-- Modal-->
     				</section><!--blue well-->
     				<br>
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- AM10 -->

<section class="PM12 ltpurple tab-pane" id="1240PM">
<br><br>
<h2 class="center">12:40 PM</h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results12->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well blue well-sm">
						<h4><?php echo $row['Title'] ?></h4>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['KEY']?>">
		Details        
</button>

<!-- Modal -->
<div class="modal purple fade" id="<?php echo $row['KEY']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel"><?php echo $row['Title'] ?></h3>
      </div>
      <div class="modal-body blue">
        <h4><?php echo $row['StartDate'] ?><br><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h4>
        <h4>
        	<?php echo $row['PrimaryPresenter']?>&nbsp; &nbsp;<?php echo $row['SecondPresenter']?>
			<br>
		</h4>
		<h5>Building: <?php echo $row['Building']?> &nbsp; &nbsp; Room: <?php echo $row['Room']?>
        </h5>
        <hr>
        <?php echo $row['Description'] ?>
      </div>
      <div class="modal-footer blue">
        <button type="button" class="btn btn-link" data-dismiss="modal">Back</button>
        <a href="<?php echo $row['AddToCalendar']?>" target="_blank" class="btn btn-danger">Add to Your Google Calendar</a>
<br><i>NOTE: Seating is limited and adding sessions to your Google Calendar does not reserve a seat at the session. Adding to your calendar is for your planning purposes only.</i>

      </div>
    </div>
  </div>
</div><!-- Modal-->
     				</section><!--blue card-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
</section><!-- PM12 -->

<section class="PM2 ltpurple tab-pane" id="220PM">
<br><br>
<h2 class="center">2:20 PM</h2>
<div class="container">

<?php 
		$i = 0;
		while ($row = $results2->fetch_assoc()) { 	
			if ($i % 3 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-4">
     				<section class="well blue well-sm">
						<h4><?php echo $row['Title'] ?></h4>
						<h5><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h5>     										
<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['KEY']?>">
		Details        
</button>

<!-- Modal -->
<div class="modal purple fade" id="<?php echo $row['KEY']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel"><?php echo $row['Title'] ?></h3>
      </div>
      <div class="modal-body blue">
        <h4><?php echo $row['StartDate'] ?><br><?php echo $row['StartTime'] ?> to <?php echo $row['EndTime'] ?></h4>
        <h4>
        	<?php echo $row['PrimaryPresenter']?>&nbsp; &nbsp;<?php echo $row['SecondPresenter']?>
			<br>
		</h4>
		<h5>Building: <?php echo $row['Building']?> &nbsp; &nbsp; Room: <?php echo $row['Room']?>
        </h5>
		<hr>                
            <?php echo $row['Description'] ?>
      </div>
      <div class="modal-footer blue">
        <button type="button" class="btn btn-link" data-dismiss="modal">Back</button>
        <a href="<?php echo $row['AddToCalendar']?>" target="_blank" class="btn btn-danger">Add to Your Google Calendar</a>
<br><i>NOTE: Seating is limited and adding sessions to your Google Calendar does not reserve a seat at the session. Adding to your calendar is for your planning purposes only.</i>

      </div>
    </div>
  </div>
</div><!-- Modal-->
     				</section><!--blue card-->
				</div><!-- col-md-4 -->
			<?php $i++;
			if ($i % 3 === 0) { ?>

				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
</div><!--container-->
<br><br><br><br><br>&nbsp<br>
</section><!-- PM2 -->
</div><!-- tab-content -->
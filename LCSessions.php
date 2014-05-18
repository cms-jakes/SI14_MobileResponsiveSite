        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>     
<script>
        // Javascript to enable link to tab
        var hash = document.location.hash;
        var prefix = "tab_";
        if (hash) {
            $('.nav-tabs a[href=' + hash.replace(prefix, "") + ']').tab('show');
        }

        // Change hash for page-reload
        $('.nav-tabs a').on('shown', function(e) {
            window.location.hash = e.target.hash.replace("#", "#" + prefix);
        });
</script>

<?php 

$message = '';
$db = new MySQLi('localhost','cmssumme_web','aC4KlC#Jog-!', 'cmssumme_SI14');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
		$sqlc1 = "SELECT * FROM `LCDatabase` WHERE `Session` = '1' ORDER BY `Title` ASC";
		$resultslc1 = $db->query($sqlc1);
		$sqlc2 = "SELECT * FROM `LCDatabase` WHERE `Session` = '2' ORDER BY `Title` ASC";
		$resultslc2 = $db->query($sqlc2);
		$sqlc3 = "SELECT * FROM `LCDatabase` WHERE `Session` = '3' ORDER BY `Title` ASC";
		$resultslc3 = $db->query($sqlc3);
		
}
		
if ($db->error) {
		$message = $db->error;
		echo $message; 
	} 
?> 

<div>
	<?php if($message) {
    	echo "<h1>$message</h1>";
	} ?>
</div>
<?php include "includes/header.php"; ?>

<section class="container white">

<ul class="nav nav-tabs" id="myTab">
 		<li class="active"><a href="#Session1" data-toggle="tab">Breakout Sessions 1</a></li>
  		<li><a href="#Session2" data-toggle="tab">Breakout Sessions 2</a></li>
  		<li><a href="#Session3" data-toggle="tab">Breakout Sessions 3</a></li>
</ul>


<!-- Tab panes -->
<div class="tab-content">
  	<div class="tab-pane active" id="Session1">
			<div class="well center blue">
				<br>
				<h2><br><h2>
				<h2>Leadership Conference June 17th<br> Breakout Sessions 1</h2> 
				<h3>1:00 to 2:20</h3>
			</div>
<br>
<?php 
		$i = 0;
		while ($row = $resultslc1->fetch_assoc()) { 	
			if ($i % 2 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-6">
     				<section class="well blue well-sm">
						<h4 class="center"><?php echo $row['Title'] ?></h4>
						<p class="center"><strong><?php echo $row['Presenter'] ?></strong>
						<br>
						<i><?php echo $row['Audience'] ?></i></p>
						<hr>     										
						<p><?php echo $row['Description'] ?></p>
					</section>
				</div>
			<?php $i++;
			if ($i % 2 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
		
  	</div><!--Session 1-->

  	<div class="tab-pane" id="Session2">
			<div class="well center blue">
				<br>
				<h2><br><h2>
				<h2>Leadership Conference June 17th<br> Breakout Sessions 2</h2> 
				<h3>2:30 to 4:00</h3>
			</div>
<br>

<?php 
		$i = 0;
		while ($row = $resultslc2->fetch_assoc()) { 	
			if ($i % 2 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-6">
     				<section class="well blue well-sm">
						<h4 class="center"><?php echo $row['Title'] ?></h4>
						<p class="center"><strong><?php echo $row['Presenter'] ?></strong>
						<br>
						<i><?php echo $row['Audience'] ?></i></p>
						<hr>     										
						<p><?php echo $row['Description'] ?></p>
					</section>
				</div>
			<?php $i++;
			if ($i % 2 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
		


  	</div><!--Session 2-->

  	<div class="tab-pane" id="Session3">
			<div class="well center blue">
				<br>
				<h2><br><h2>
				<h2>Leadership Conference June 18th<br> Breakout Sessions 3</h2> 
				<h3>12:45 to 2:00</h3>
			</div>
<br>

<?php 
		$i = 0;
		while ($row = $resultslc3->fetch_assoc()) { 	
			if ($i % 2 === 0) { ?>
				<section class="row">
			<?php } ?>
				<div class="col-md-6">
     				<section class="well blue well-sm">
						<h4 class="center"><?php echo $row['Title'] ?></h4>
						<p class="center"><strong><?php echo $row['Presenter'] ?></strong>
						<br>
						<i><?php echo $row['Audience'] ?></i></p>
						<hr>     										
						<p><?php echo $row['Description'] ?></p>
					</section>
				</div>
			<?php $i++;
			if ($i % 2 === 0) { ?>
				</section><br> <!-- row -->
			<?php }  //endif
			} //end loop ?>  
		


  	</div><!--Session 3-->

</div><!--tab-content-->
<br><br><br><br><br><br>&nbsp<hr><br>
<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>

<?php include "includes/footer.php" ?>


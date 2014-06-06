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
		$sqlc2 = "SELECT * FROM `LCDatabase` WHERE `Session` = '2' ORDER BY `Title` ASC";
		$resultslc2 = $db->query($sqlc2);
		
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
<?php include "includes/lcheader.php"; ?>
<body id="lcsessions" class="green">

<div class="container" id="Session2">
			<div class="well center ltblue">
				<h2>Leadership Conference June 17th<br> Breakout Sessions 2<br> at Waddell</h2> 
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
     				<section class="well ltblue well-sm">
						<h4 class="center"><?php echo $row['Title'] ?></h4>
						<p class="center"><strong><?php echo $row['Presenter'] ?></strong>
						<br>
						Room: <?php echo $row['Room'] ?>
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
<br><br><br><br><br><br>&nbsp<hr><br>

<?php include "includes/footer.php" ?>


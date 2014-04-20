<?php 
$message = '';
$db = new MySQLi('localhost','si','si', 'SI_TestDB');
if ($db->connect_error){
	$message = $db->connect_error;
}else{
	$sql = "SELECT * FROM  `TABLE 1`" ;
	$results = $db->query($sql);
	if ($db->error) {
		$message = $db->error;
	}
}
?> 

<?php include "includes/header.php"; ?>
<body id="home">
<section class="ltblue">
	<img src="images/SI_LogoTop.png" class="header img-responsive" >

<div id="theme">
<div>
	<?php if($message) {
		echo"<h1>$message</h1>";
	} ?>
</div>
<img src="images/SI_LogoBottom.png" class="header img-responsive" >
</div>
</section> 

<!-- Keynotes -->
<div class="green" id="keynotes">
	<div class="center"><h1>Keynote Speakers</h1></div>
	<div class="row full">
	<!--Morrison -->
		<div class="col-md-6" id="morrison">
		<br><br>
		<div class="thumbnail">
			<div class="white center">
				<h3 style="color:#000">Monday June 16th</h3>
				<h2 style="color:#000">Dr. Heath Morrison</h2>
			</div>	
			<img src="images/morrison.jpg" class="img-thumbnail"/>
			<div class="caption"><p>Dr. Heath E. Morrison joined Charlotte-Mecklenburg Schools in July 2012 from the Washoe County School District (Reno).</p><p>Dr. Morrison quickly established an entry plan, meeting with parents, employees, citizens and students in a series of public appearances and town hall meetings in his first 100 days. Using input and concerns from the community, he set the district’s course for his first year with The Way Forward, a document that identified key strategic goals and district direction.</p>
			<p><a href="http://www.cms.k12.nc.us/superintendent/Pages/default.aspx" target="_blank" class="btn-group btn-group-justified btn btn-success" role="button">Read More</a></p>
	</div>
</div>
</div>
	<!--Hayes-Jacobs -->
		<div class="col-md-6" id="hayes">
		<br><br>
		<div class="thumbnail">
			<div class="white center">
				<h3 style="color:#000">Tuesday June 17th</h3>
				<h2 style="color:#000">Dr. Heidi Hayes Jacobs</h2>
			</div>	
			<img src="images/hayes.jpg" class="img-thumbnail">
			<div class="caption"><p>Dr. Heidi Hayes Jacobs, creator of Curriculum21, is also the founder and president of Curriculum Designers, Inc. and Executive Director of the National Curriculum Mapping Institute and Academy.Heidi has served as an education consultant to thousands of schools nationally and internationally. She works with schools and districts K-12 on issues and practices pertaining to: curriculum reform, instructional strategies to encourage critical thinking, and strategic planning.</p>
				<p><a href="http://www.curriculum21.com/about/faculty/" target="_blank" class="btn-group btn-group-justified btn btn-success" role="button">Read More</a></p>
			</div>
		</div>
</div>
	</div>
	<div class="row full">
	<!--Casap -->
		<div class="col-md-6" id="casap">
		<br><br>
		<div class="thumbnail">
		<div class="white center">
				<h3 style="color:#000">Wednesday June 18th</h3>
				<h2 style="color:#000">Jaime Casap</h2>
			</div>	
		<img src="images/casap.jpg" class="img-thumbnail">
		<div class="caption">
				<p>Senior Education Evangelist and Tech & Learning's "2012 Top 10 Most Influential" hoodlum from Hells Kitchen focused on leveling the playing field and making education the silver bullet to millions of students around the world. Focused on using technology and the web as the enabling capability in our classrooms and schools to transform education!</p>	</div>
				<p><a href="http://www.jcasap.com/" target="_blank" class="btn-group btn-group-justified btn btn-success" role="button">Read More</a></p>
		</div>
	</div>
	<!--Burmark-->
		<div class="col-md-6" id="burmark">
			<br><br>
			<div class="thumbnail">
				<div class="white center">
				<h3 style="color:#000">Thursday, June 19th</h3>
				<h2 style="color:#000">Dr. Lynell Burmark</h2>
			</div>	

				<img src="images/burmark.png" class="img-thumbnail"/>
				<div class="caption">
						<p>Winner of Stanford University’s prestigious Walter Gores Award for Excellence in Teaching, Dr. Lynell Burmark is passionate about education and the potential for learners in her presentations and yours.</p>
						<p>Lynell’s extensive teaching experience spans kindergarten through graduate school; her visually enhanced presentations range from small-group seminars to keynotes and videoconferences for thousands of people across the globe.</p>
						<p><a href="http://educatebetter.org/" target="_blank" class="btn-group btn-group-justified btn btn-success" role="button">Read More</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row full">
	<!--Flood -->
		<div class="col-md-6 col-md-offset-3" id="flood">
			<br><br>
			<div class="thumbnail">
			<div class="white center">
				<h3 style="color:#000">Tuesday, June 24th</h3>
				<h2 style="color:#000">Dr. Tim Flood</h2>
			</div>	

			<img src="images/flood.jpg" class="img-thumbnail"/>
			<div class="caption">
				<p>Tim Flood specializes in cross-cultural communication and teaches courses on global communication, as well as segments of the Communication, Leadership and Career Management series.</p>
				<p>He is certified to use both CultureActive and InterCultural Edge (ICE)* cross-cultural communication instruments and the Intercultural Development Inventory (IDI) global competency assessment tool.</p>
				<p>Flood’s research interests include cross-cultural communication and global business leadership fluency.</p>
				<p><a href="http://www.kenan-flagler.unc.edu/Global-Business-Center/programs/essentials-for-cross-cultural-business/tim-flood" target="_blank" class="btn-group btn-group-justified btn btn-success" role="button">Read More</a></p>
			</div>
		</div>
		</div>
	<div class="clearfix visible-xl"></div>
	</div>
	<br><br>
</div>
<!-- End Keynotes -->
<!-- Schedule DB -->
<div class="purple" id="DB">
	<div class="container">
		<div class="center">
			<h1>Sessions by Title</h1>
			<h4 class="f"></h4>
		</div>
		<?php while ($row = $results->fetch_assoc()) { ?>
		<div class="panel-group" id="accordion">
  			<div class="panel panel-default">
   				<div class="panel-heading">
     			<h4 class="panel-title">
        				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['ID']; ?>">
          					<?php echo $row['Title']; ?>
        				</a>
			    </h4>
    		</div>
    	</div>
    		<div id="collapse<?php echo $row['ID']; ?>" class="panel-collapse collapse">
      			<div class="panel-body">
        			<h3><?php echo $row['PrimaryPresenter']; ?>&nbsp&nbsp&nbsp<?php echo $row['SecondPresenter']; ?></h3>
					<h4><?php echo $row['Department']; ?></h4>
					<hr>
					<p><?php echo $row['Description']; ?></p>
				</div>
    		</div>
  		</div>
  		<?php } ?>
<!--		
		<table class="table table-bordered table-responsive db header-fixed" id="mytable">
			<thead class="header"><tr><th colspan="2">Title<br>Presenter / CCSS / Description</th></tr></thead>
			<?php while ($row = $results->fetch_assoc()) { ?>
				<tr>
					<td colspan="2" class="left"><h3><?php echo $row['Title']; ?></h3></td>
				</tr>
				<tr>
					<td><?php echo $row['PrimaryPresenter']; ?><br><?php echo $row['SecondPresenter']; ?></td>
					<td><?php echo $row['Department']; ?></td>
				</tr>
				<tr>	
					<td colspan="2" class="left description"><?php echo $row['Description']; ?></td>					
				</tr>
				<tr>
				</tr>
			<?php }  ?>			
		</table>
-->
	
</div>
</div>
<!-- Schedule Format-->
<div class="blue" id="sessionsFormat">&nbsp<br><br>
	
	
	<div class="center">
		<h1>Sessions Format: Week 1</h1>
		<h4 class="f">Session descriptions will post soon!</h4>
	</div>
	
	<table class="table table-responsive ">										
		<thead><tr><th>	Time	</th><th id="June 16th">	Monday<br>June 16th	</th><th id="June 17th">	Tuesday<br>June 17th	</th><th>	Wednesday<br>June 18th	</th><th>	Thursday<br>June 19th	</th></tr></thead>
		<tr><td>	8:30-10:00	</td><td>	Welcome<sup>*</sup> & Keynote:<br> Dr. Morrison	</td><td>	Keynote:<br>Dr. Heidi Jacobs	</td><td>	Keynote:<br>Jaime Casap, Google	</td><td>	Keynote:<br> Lynell Burmark	</td></tr>
		<tr><td>	10:00-10:10	</td><td>	break	</td><td>	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	10:10-11:40	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	11:40-12:40	</td><td>	lunch	</td><td>	lunch	</td><td>	lunch	</td><td>	lunch	</td></tr>
		<tr><td>	12:40-2:10	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	2:10-2:20	</td><td>	break	</td><td>	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	2:20-3:50	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td colspan="5"><sup>*</sup> June 16th: Breakfast 8:00-9:00 before Dr. Morrison's Welcome Keynote</td></tr>
	</table>	
	<hr class="hrThick">
	<div class="center">
		<h1>Sessions Format: Week 2</h1>
		<h4 class="f">Session descriptions will post soon!</h4>
	</div>

	<table class="table table-responsive ">										
		<thead><tr><th>	Time	</th><th id="June 23rd">	Monday<br>June 23rd	</th><th class="gci" id="June 24th">	Tuesday<br>June 24th<br><h4 class="redtxt">Global Competency Institute</h4>	</th><th>	Wednesday<br>June 25th	</th><th>	Thursday<br>June 26th	</th></tr></thead>
		<tr><td>	8:30-10:00	</td><td>	sessions	</td><td class="gci">	Keynote:<br>Dr. Tim Flood<br>	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	10:00-10:10	</td><td>	break	</td><td class="gci">	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	10:10-11:40	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	11:40-12:40	</td><td>	lunch	</td><td class="gci">	lunch	</td><td>	lunch	</td><td>	lunch	</td></tr>
		<tr><td>	12:40-2:10	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
		<tr><td>	2:10-2:20	</td><td>	break	</td><td class="gci">	break	</td><td>	break	</td><td>	break	</td></tr>
		<tr><td>	2:20-3:50	</td><td>	sessions	</td><td class="gci">	sessions	</td><td>	sessions	</td><td>	sessions	</td></tr>
	</table>	
	<br><br>

<!-- 
<div class="blue">
<div class="blue schedule" id="June 17th">
	<div class="container">
		<h1>June 17th</h1>
	</div>

</div></div>
<div class="blue">
<div class="blue schedule" id="June 18th">
	<div class="container">
		<h1>June 18th</h1>
	</div>
</div>
-->
<!-- June 19th -->
<!-- June 23rd -->
<!-- June 24th -->
<!-- June 25th -->
<!-- June 26th -->

</div>
<!--Maps -->
<div class="white" id="maps">&nbsp<br>
<div>
	<div class="container">
		<div>
			<h1>Map To CPCC</h1>
		<div class="center">
			<br><a href="https://www.cpcc.edu/campuses/central/images/central_map"><button type="button" class="btn btn-primary center">Download Campus Map</button></a>
			<br>
			<br>
		</div>			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26073.143073195653!2d-80.825558!3d35.227813!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf782956a4f2a05a!2sCentral+Piedmont+Community+College+-+Central+Campus!5e0!3m2!1sen!2sus!4v1395891196303" width="100%" height="450" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
</div>
</div>
<!--Technology -->
<div class="red" id="devices">&nbsp<br>
	<div>
	<div class="container">
	<h1>Technology</h1>
		<div class="row">
			<div class="col-xs-2"><h2 class="fa fa-signal fa-4x"></h2></div>
			<div class="col-xs-10"><h2> CPCC has a secure guest network that you will be able to connect to with your own device.</h2></div>
		</div>
		<div class="row">
			<div class="col-xs-2"><h2 class="fa fa-laptop fa-4x"></h2></div> 
			<div class="col-xs-10"><h2>Most sessions will expect users to have a device. Please bring your CMS issued<sup>*</sup> or personal device (laptop or tablet).</h2></div>
		</div>
		<div class="row">  
			<div class="col-xs-offset-2"><h3><sup>*</sup>Talk to your school's leadership for more details about CMS issued devices.</h3></div>
		</div>		
</div>
</div>
</div>
<div class="white">
<br><br><br><br>
</div>
<?php include "includes/footer.php" ?>
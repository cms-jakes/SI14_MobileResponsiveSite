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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMS Summer Institute '14</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transforming Learning for Every Student">
<!-- Not sure about "viewport" -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="shortcut icon" href="favicon.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
		<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></sc\
ript>
    <![endif]-->
  </head>

<body>
<!--navbar top -->
<div class="row">
<nav class="navbar navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#theme">Theme</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keynote Speakers<b class="caret"></b></a>
          <ul class="dropdown-menu">
          	<li><a href="#morrison">Dr. Morrison: June 16th</a></li>
          	<li><a href="#hayes">Dr. Heidi Hayes Jacobs: June 17th</a></li>
          	<li><a href="#casap">Jaime Casap: June 18th</a></li>
          	<li><a href="#burmark">Dr. Lynell Burmark: June 19th</a></li>
          	<li><a href="#flood">Dr. Tim Flood: June 24th</a></li>
          </ul>
        </li>
		<li><a href="#sessionsFormat">Sessions Format</a></li>
<!--        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule by Day<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#June 16th">June 16th</a></li>
            <li><a href="#June 17th">June 17th</a></li>
            <li><a href="#June 18th">June 18th</a></li>
            <li><a href="#June 19th">June 19th</a></li>
            	<li class="divider"></li>
			<li><a href="#June 23rd">June 23rd</a></li>
            <li><a href="#June 24th">June 24th</a></li>
            <li><a href="#June 25th">June 25th</a></li>
            <li><a href="#June 26th">June 26th</a></li>            
          </ul>
        </li>
-->  
<!--        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sessions by CCSS<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#CCSS ELA Elementary School">CCSS ELA Elementary School</a></li>
            <li><a href="#CCSS Math Elementary School">CCSS Math Elementary School</a></li>
            <li><a href="#CCSS ELA Middle School">CCSS ELA Middle School</a></li>
            <li><a href="#CCSS ELA Middle School">CCSS Math Middle School</a></li>
            <li><a href="#CCSS ELA High School">CCSS ELA High School</a></li>
            <li><a href="#CCSS ELA High School">CCSS Math High School</a></li>
            	<li class="divider"></li>
            <li><a href="#NCES Arts Education">NCES Arts Education</a></li>
            <li><a href="#NCES English as a Second Language">NCES English as a Second Language</a></li>
            <li><a href="#NCES Guidance">NCES Guidance</a></li>
            <li><a href="#NCES Healthful Living - Health & PE">NCES Healthful Living - Health & PE</a></li>
            <li><a href="#NCES Information and Technology">NCES Information and Technology</a></li>
            <li><a href="#NCES Occupational Course of Study">NCES Occupational Course of Study</a></li>
            <li><a href="#NCES Science">NCES Science</a></li>
			<li><a href="#NCES Social Studies">NCES Social Studies</a></li>
			<li><a href="#NCES World Languages">NCES World Languages</a></li>
				<li class="divider"></li>
			<li><a href="#Exceptional Children">Exceptional Children</a></li>
			<li><a href="#Pre-K">Pre-K</a></li>
				<li class="divider"></li>
			<li><a href="#Standard 1">Standard 1</a></li>
			<li><a href="#Standard 2">Standard 2</a></li>
			<li><a href="#Standard 3">Standard 3</a></li>
			<li><a href="#Standard 4">Standard 4</a></li>
			<li><a href="#Standard 5">Standard 5</a></li>							
				<li class="divider"></li>
          </ul>
        </li>
-->  
        <li><a href="#maps">Maps</a></li>
        <li><a href="#devices">Technology</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<img src="images/SI_LogoTop.png" class="header img-responsive" >
<div id="theme">
<div>
	<?php if($message) {
		echo"<h1>$message</h1>";
	} ?>
</div>
<img src="images/SI_LogoBottom.png" class="header img-responsive" >
</div>

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
<!--footer fixed-->
	<footer>
		<div class="white full">
			<div class="container center">
				<div class="row">
					<div class="col-xs-3"><img src="images/cms.png" class="center img-responsive padding10"></div>
					<div class="col-xs-3"><img src="images/cpcc.png" class="center img-responsive padding10"></div>
					<div class="col-xs-2" style="vertical-align:middle">
								<a href="https://twitter.com/cmstothecore" target="_blank"><img src="images/twitter.png" style="vertical-align:middle" class="center img-responsive"> 
					</div>
					<div class="col-xs-2">
								<a href="https://www.facebook.com/pages/CMSlearns/252786364864618?ref=hl" target="_blank"><img src="images/facebook.jpg" class="center img-responsive">
					</div>
					<div class="col-xs-2">	
								<a href="https://www.youtube.com/channel/UCLplAkn21MPkCbjz_JOCaLA" target="_blank"><img src="images/youtube.png" class="center img-responsive">							
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
<!-- javaScript-->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myscript.js"></script>
	<script language="javascript" type="text/javascript" >
    $(document).ready(function(){
      // add 30 more rows to the table
      var row = $('table#mytable > tbody > tr:first');
      var row2 = $('table#mytable2 > tbody > tr:first');
      	for (i=0; i<30; i++) {
        	$('table#mytable > tbody').append(row.clone());
        	$('table#mytable2 > tbody').append(row2.clone());
      	}	
 
      	// make the header fixed on scroll
      	$('.table-fixed-header').fixedHeader();
    	});
  </script>
</body>
</html>

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
<?php 
require('include/header.php'); // Menu + Header + Doctype Location :: [Include]
?>

    <div class="spacing"></div>

	<div class="title_wrapper">
    	<div class="container">
	    	<div class="span6"><h1>Stream</h1></div>
    		<div class="span6 breadcrumbs"><strong><a href="index">Accueil</a> / Stream</strong></div>
    	</div>
    </div>

    <div class="container">
    	<div class="row">

    		<div class="span12 block-title centered">
				<h2>Twitch Light-esc</h2>
				<p>Regardez le stream de la structure</p>
			</div>

			<div class="span12 block-divider"></div>

			<div class="blog-post">
	    		<div class="blog-image">
					<div class="blog-date">
						<span class="date">Avril<br />14</span>

					</div>
	    		</div>
				<center><h2>Light-ESC Stream</h2></center>

				<div class="blog-info">
	    		</div>

	    		<div class="blog-content">
					<center> <iframe src="http://www.twitch.tv/lightesc/embed" frameborder="0" scrolling="no" height="678" width="770"></iframe><iframe src="http://www.twitch.tv/lightesc/chat?popout=" frameborder="0" scrolling="no" height="678" width="350"></iframe></center>
                  </div>

	    		</div>

	    	</div>

	 		<div class="block-divider"></div>




     

      </div>
    </div> <!-- /container -->



<!--fUNCTIONS-->
        <script type="text/javascript" src="js/jquery-func.js"></script>
        <script>  function refresh_data () {
    var channel = "lightesc";
    // Requesting Stream informations
    $.ajax({
        url: 'https://api.twitch.tv/kraken/streams/' + channel,
        dataType: 'jsonp',
        success: function(data){
            if ( data.stream == null ) {
                document.getElementById("counter").innerHTML = "Offline";
            }
            else {
                document.getElementById("counter").innerHTML = "Nombre de viewers: " +data.stream.viewers;
            }
        },
        error: function ( jqXHR, textStatus, errorThrown ) {
            console.log ( "Error while requesting Stream informations" );
        }
    });
                               
    setTimeout(refresh_data, 10000);
 }
refresh_data();
                        </script>
 <?php require ('include/footer.php'); ?>

	
</div> <!-- / main_wrapper -->
</body>
</html>
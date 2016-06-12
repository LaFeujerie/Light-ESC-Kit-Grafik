<?php 
require('include/header.php'); // Menu + Header + Doctype Location :: [Include]
?>

    <div class="spacing"></div>

	<div class="title_wrapper">
    	<div class="container">
	    	<div class="span6"><h1>Entrer en contact</h1></div>
    		<div class="span6 breadcrumbs"><strong><a href="index">Accueil</a> / Contact</strong></div>
    	</div>
    </div>

    <div class="container">
    	<div class="row">

    		<div class="span12 block-title centered">
				<h2>Nous contacter</h2>
				<p>Vous avez une demande particulière ?</p>
			</div>

			<div class="span12 block-divider"></div>

			<div class="gmap span12">
				 <div id="map-canvas"></div>
			</div>

			<div class="span12 block-divider"></div>


			<div class="span8 contact">
				<h3 class="title">Formulaire de contact</h3>
				<div class="entry-content">

					<form action="post_contact.php" id="formContact"  method="POST">
						<ul class="contactform controls">

							<li class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input type="text" name="nom" placeholder="Prénom / Pseudo / Nom de société*" id="contactName" value="" class="validate[required,custom[onlyLetter],length[0,100]] required requiredField">
															</li>

							<li class="input-prepend">
							    <span class="add-on"><i class="icon-envelope"></i></span>
								<input type="text" placeholder="Email*" name="email" id="contactEmail" value="" class="validate[required,custom[email]] required requiredField email">
															</li>

							<li class="input-prepend">
	                            <span class="add-on"><i class="icon-comment"></i></span>
	                            <input type="text" placeholder="Sujet" name="objet" id="contactPhone" value="" class="subject">

	                        </li>


							<li class="input-prepend">
								<span class="add-on"><i class="icon-align-justify"></i></span>
								<textarea name="message" placeholder="Message*" id="contactMessage" rows="20" cols="30" class="validate[required,length[6,300]] required requiredField"></textarea>
															</li>

							<li>
								   <input type="submit" name="envoi" class="button-green button-small" value="Envoyer le mail">
							</li>
						</ul>
						<input type="hidden" name="submitted" id="submitted" value="true" class="button-small">
					</form>
				</div><!-- .entry-content -->

			</div><!-- #contact -->
			<div class="span4 aq-block">
	    	  <h3>Trouvez nous sur</h3>
			  	<ul class="social-media">
	                <li><a target="_blank" class="facebook" href="https://www.facebook.com/Lightesc" target="blank">Facebook</a></li>
	                <li><a target="_blank" class="twitter" href="https://twitter.com/LightESC" target="blank">Twitter</a></li>
                </ul>
                <div class="clear"></div>
			</div>
	    	<div class="span4 aq-block">
	    	  <h3>COMMENT NOUS REJOINDRE</h3>
			  <div class="wcontainer">
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam eu lacinia ullamcorper consectetur, adipiscing condimentum tristique vel, consectetur adipiscing elit eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie. Curabitur pellentesque massa eu nulla consequat sed porttitor arcu porttitor. Quisque volutpat pharetra felis, eu cursus lorem molestie vitae.</p>
				<p>Aliquam dictum pharetra pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra ligula eu metus pulvinar tristique.</p>
			  	<strong>
			  		<i class="icon-building main-colour" ></i> &nbsp; Siège social:13 rue de la république 54300 Luneville <br/>
				 	<i class="icon-phone main-colour"></i> &nbsp; 06 24 01 56 61<br/>
					<i class="icon-envelope main-colour"></i> &nbsp; contact@light-esc.com<br/>
					<i class="icon-headphones main-colour"></i>&nbsp; ts.light-esc.com
				</strong>

			  </div>
			</div>


     

      </div>
    </div> <!-- /container -->




 <?php require ('include/footer.php'); ?>

	<!--******* Javascript Code for the google map *******-->
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	 
	 <script type="text/javascript">
	function initialize() {
	  var mapOptions = {
	    zoom: 12,
	    center: new google.maps.LatLng(48.6843900, 6.1849600),
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	  var contentString = 'Bonjour!';
	  var infowindow = new google.maps.InfoWindow({
	      content: contentString
	  });
	  var image = 'img/marker.png';
	  var myLatLng = new google.maps.LatLng(48.6843900, 6.1849600);
	  var marker = new google.maps.Marker({
	      position: myLatLng,
	      map: map,
	      icon: image
	  });
	
	  google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map,marker);
	  });
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	jQuery().UItoTop({ easingType: 'easeOutQuart' });
	</script>
	
</div> <!-- / main_wrapper -->
</body>
</html>
   <footer>
        <div class="container">
        	<div class="footer_widget span3">
	        	<h3><font color="#e24838">Qui Sommes nous ?</font></h3>
	        	<div class="textwidget">
	        		 <p><font color="#ececec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut orci mauris. Sed ligula mi, sollicitudin quis imperdiet et,
	        		rutrum at orci. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	        		Praesent ut orci mauris. Sed ligula mi, sollicitudin quis imperdiet et, rutrum at orci. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut orci mauris.</font>
	        	</div>
        	</div>


        	<div class="footer_widget span3">
	        	<h3><font color="#e24838">Partenaires</font></h3>
	        	<ul class="menu">
	        		<li><a href="#">Sed volutpat nisi non lectus iaculis </a><span class="post-date"><font color="#ececec">Mars 2016</font></span></li>
					<li><a href="#">Vestibulum suscipit velit quis diam</a><span class="post-date"><font color="#ececec">Mars 2016</font></span></li>
					<li><a href="#">Mauris quis risus nunc</a><span class="post-date"><font color="#ececec">Mars 2016</font></span></li>
				</ul>
        	</div>



        	<div class="footer_widget span3">
	        	<h3><font color="#e24838">Tags</font></h3>
	        	<div class="tagcloud">
	        		<a href="#">Esport</a>
					<a href="#">Entreprise</a>
					<a href="#">League Of Legends</a>
					<a href="#">Counter Strike : Global Offansive</a>
					<a href="#">OverWatch</a>
					<a href="#">Hearthstone</a>
				</div>
        	</div>

        	<div class="footer_widget span3 last">
	        	<h3><font color="#e24838">Categories</font></h3>
	        	<ul class="menu">
	        		<li><a href="#">Partenaires</a></li>
					<li><a href="team">Equipes</a></li>
					<li><a href="#">News</a></li>
					<li><a href="contact">Contact</a></li>
					<li><a href="recrutement">Recrutements: <font color="gold">ON</font></a></li>
				</ul>
        	</div>

        </div><!-- /container -->

        <div class="copyright">
	    	<div class="container">

	        	<p>© 2016&nbsp;<a href="http://light-esc">Light-esc</a> - </p>
	        	<p> <a href="#">Mentions Légales</a> </p>

	        	<div class="social">
	        		<a class="twitter" data-toggle="tooltip" data-original-title="Twitter" href="https://twitter.com/LightESC" target="blank">&nbsp;</a>
	        		<a class="facebook" data-toggle="tooltip" data-original-title="Facebook" href="https://www.facebook.com/Lightesc" target="blank">&nbsp;</a>
	        	</div>
	        </div>
	    </div>

      </footer>
  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="js/bootstrap-button.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/quicksand.js"></script>
    <script type="text/javascript" src="js/clignotant.js"></script>
    <script type="text/javascript" src="js/cookiechoices.js"></script>

        <script type="text/javascript" src="js/styleswitch.js"></script>
         <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
            <script type="text/javascript" src="js/styleswitchcustom.js"></script>

    <script type="text/javascript" src="js/jquery.fancybox62ba.js?v=2.1.3" ></script>
	<script type="text/javascript" src="layerslider/jQuery/jquery-transit-modified.js"></script>
	<script type="text/javascript" src="layerslider/js/layerslider.transitions.js"></script>
	<script type="text/javascript" src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.ui.totop.js"></script>


	<script type="text/javascript">

	jQuery(function ($) {
	    $('[data-toggle=tooltip]').tooltip()
	});


	jQuery(document).ready(
	  function() {
	    $("html").niceScroll({
	        cursorcolor:"#2D3032",
	        cursoropacitymin:0.3,
	        cursoropacitymax:0.5,
	        cursorwidth:"10px",
	      });
	  }
	);

	jQuery(window).scroll(function(){
	  if ($(this).scrollTop() > 10){
	   // x should be from where you want this to happen from top//
	    //make CSS changes here
	    $('#layerslider-container-fw').addClass("slires");
	    $('.navbar-inner').addClass("conres");
	    $('.navbar-inner img').addClass("logores");
	    $('.navbar-inner .nav-collapse').addClass("navres");
	    $('#header-searchform').addClass("seres");

	  }
	  else{
	    //back to default styles
	    $('.navbar-inner').removeClass("conres");
	     $('#layerslider-container-fw').addClass("slires");
	     $('.navbar-inner img').removeClass("logores");
	      $('.navbar-inner .nav-collapse').removeClass("navres");
	        $('#header-searchform').removeClass("seres");
	  }
	});

	jQuery(function($){
	    $("li").slice(0, 5).show().fadeIn(3000); // select the first ten
	    $("#load").click(function(e){ // click event for load more
	        e.preventDefault();
	        $("li:hidden").slice(0, 5).fadeIn(3000); // select next 10 hidden divs and show them
	        if($("li:hidden").length == 0){ // check if any hidden divs still exist
	            alert("No more divs"); // alert if there are none left
	        }
	    });
	});


	jQuery('#layerslider').layerSlider({
		skinsPath : './layerslider/skins/',
		skin : 'fullwidth',
		thumbnailNavigation : 'hover',
		navStartStop : false,
		hoverPrevNext : false,
		responsive : false,
		responsiveUnder : 1170,
		sublayerContainer : 1170,
		autoPlayVideos : false
	});


	jQuery().UItoTop({ easingType: 'easeOutQuart' });

	jQuery(document).ready(function() {
	    /*
	    *  Simple image gallery. Uses default settings
	    */

	    $('.shadowbox').fancybox();
	});
	</script>
</div> <!-- / main_wrapper -->
</body>

</html>
<!DOCTYPE HTML >
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">

<html>
	<head>

		<?php get_header(); ?>
		<?php wp_head(); ?>
		
		<?php
			include("wp-content/themes/foryouandyourcustomers/php/generateTiles.php");	
					
			include("wp-content/themes/foryouandyourcustomers/php/getRankedDate.php");		
			$feed = $wpdb->get_results($query);
		?>
		
	</head>
	
	<body>
		
		<div class="container">
			<?php include 'html/buildHeader.php'; ?>	
		</div>
		<div class="container">
			<?php include 'html/buildHero.php'; ?>	
		</div>
		
		
		<div class="content_color">
			<div class="container">
				<div id="isotope">
					<?php
						foreach ($feed as $feed) {
						 	generateTiles($feed->post_id, $feed->post_type);

						}
					?>
				</div>

			</div>
		</div>
		
		<?php //include 'buildFooter.php'; ?>
	</body>
	
	
	
	
	<script>

		var jQuerycontainer = jQuery('#isotope');
		jQuerycontainer.imagesLoaded( function(){
		  jQuerycontainer.isotope({
		  itemSelector: '.item',
		  layoutMode : 'masonry'
		   });	
		});
		

		/*
				
		$(window).load(function()
		{ 
			$('#isotope').isotope({
		  // options
		  itemSelector : '.item',
		  layoutMode : 'masonry'
		  });	
		});
		
				
		*/
		
		$("#rtest").hyphenate('en-us');
		
		
		$(document).ready(function() {
		        // $('#slide').slideDown("slow");
		}); 
		$("#target").click(function () {
			if ($("#slide").is(":hidden")) {
				$("#slide").slideDown("slow");
				} else {
				$("#slide").slideUp("slow");
				}		
	    });

	</script>
</html>
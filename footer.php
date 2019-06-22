<div class="scrollup">
</div>
	<!-- Start Content Animation Script -->
	<script src="js/wow.js"></script>
	<script>
	wow = new WOW(
	  {
		animateClass: 'animated',
		offset:       100,
		callback:     function(box) {
		  //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	  }
	);
	wow.init();
	document.getElementById('moar').onclick = function() {
	  var section = document.createElement('section');
	  section.className = 'section--purple wow fadeInDown';
	  this.parentNode.insertBefore(section, this);
	};
</script>
<!-- End Content Animation Script -->
<!--js file link start -->
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--js file link end -->

			<footer>
				Test page
			</footer>
		</div>
		<script src="jquery-3.2.1.min.js"></script>
		<script>
$(document).ready(function(){
	let navbarPos = $('#navbar-block').offset().top;
	$(document).on('scroll', function(){
		if($(document).scrollTop()>navbarPos){
			if(!$('#navbar-block').hasClass('stickyNavbar')){
				$('#navbar-block').addClass('stickyNavbar');
				$('#navbar-replacer').height($('#navbar-block').outerHeight(true));
			}
		} else {
			if($('#navbar-block').hasClass('stickyNavbar')){
				$('#navbar-block').removeClass('stickyNavbar');
				$('#navbar-replacer').height(0);
			}
		}
	});

	$('#show-menu').on('click', function(){
		$('.nav-item').slideToggle('fast');
	});

	$('.expand-dropdown').on('click', function(e){
		$(e.currentTarget).nextAll('.dropdown-content').slideToggle('fast');
	});
});
		</script>
	</body>
</html>

</body>
<footer>
	<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/fontawesome/all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{	var w_height = $(window).height();
			$(".movil-menu").css({"height":w_height});

			$(".progress-bar").each(function(){
				var ancho = $(this).data("ancho")
				$(this).html(ancho)
				$(this).animate({
					width: ancho
				}, 2500);
			})
			baguetteBox.run('.tz-gallery');
		})



		function showMenuMovil()
		{
				$(".movil-menu").removeClass("invisible").addClass("fadeLeft");
				$(".btn-movil-menu").addClass("invisible");
				setTimeout(function(){$(".movil-menu").removeClass("fadeLeft")}, 1500);
			
		}

		function closeMenuMovil()
		{
			$(".movil-menu").addClass("fadeLeft-o");
			$(".btn-movil-menu").removeClass("invisible");
			setTimeout(function(){$(".movil-menu").addClass("invisible").removeClass("fadeLeft-o")}, 1500);
		}
	</script>
</footer>

</html>
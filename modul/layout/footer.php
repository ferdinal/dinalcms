	<script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>

	<script type="text/javascript">
	$(".delete").on('click', function(e){
		

		var result = confirm("Want to delete?");
		if (result) {
		    return true;
		}
		e.preventDefault();
	});
	</script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>
<html>
	<head>
		<title>Facebook Share</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://connect.facebook.net/en_US/all.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('.shareonfacebook').click(function (e) {
				e.preventDefault();
				FB.init({
					appId : '1177400545702027'
				}); 
				FB.ui({
				   method: "share",
				   title: "hello! this is title",
				   href: "BLOG_LINK",
				   picture:"IMAGE_URL",
				   caption: "",
				   description: "this is description",
				   message: "This is message"
				});
			});
		 });
		</script>
	</head>
	<body>
		<a class="shareonfacebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
	</body>
</html>
<doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Page Not Found | <?php echo bloginfo('name') ?></title>
	</head>
	<body>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				background-color: #f0f0f0;
			}

			p {
			   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
			   font-weight: 300;
			   color: #808080;
			}

			#header {
				padding: 5px 0px;
			}

			#footer p {
				padding: 0;
				padding-bottom: 10px;
				margin: 0;
			}

			.w720 {
				width: 90%;
				max-width: 720px;
				margin: 0px auto;
			}

			@media (max-width: 480px) {
				iframe {
					height: 1300px !important;
				}
			}
		</style>

		<div id="header">
			<div class="w720">
				<p><?php echo $message; ?></p>
			</div>
		</div>
		<iframe src="https://notfound-static.fwebservices.be/404/index.html?&amp;key=7c1767b30512b6003fd3c2e618a86522" width="100%" height="755" frameborder="0"></iframe>
		<div id="footer">
			<div class="w720">
				<p>If you also use Wordpress, you can <a target="_blank" href="http://wordpress.org/extend/plugins/notfoundorg-404-page/">help find missing children too.</a></p>
			</div>
		</div>
	</body>
</html>
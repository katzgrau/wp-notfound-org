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
				width: 720px;
				margin: 0px auto;
			}

		</style>

		<div id="header">
			<div class="w720">
				<p>Whoops! This page either doesn't exist, or has gone missing. 
				   You can <a href="#" onclick="history.go(-1);">click here to go back</a>, 
				   or <a href="<?php echo site_url() ?>">click here</a> to go to the front page. 
				   But before you do, take a look to see if you recognize the missing child below.</p>
			</div>
		</div>
		<iframe src="http://notfound-static.fwebservices.be/404/index.html?&amp;key=7c1767b30512b6003fd3c2e618a86522" width="100%" height="600" frameborder="0"></iframe>
		<div id="footer">
			<div class="w720">
				<p>If you also use Wordpress, you can help find missing children too.</p>
			</div>
		</div>
	</body>
</html>
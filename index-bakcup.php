<?php require_once('functions.php'); ?>
<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<title>Bootstrap 3 Multi-Level Dropdown Demo | JDM Digital</title>
		<meta name="Description" content="A quick multi-dropdown demo in <strong>Bootstrap v3.3.7</strong>.  There's also a version for Bootstrap v4.x coming soon.">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel='dns-prefetch' href='//code.jquery.com' />
		<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
		<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
		<link rel='dns-prefetch' href='//code.highcharts.com' />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="custom.css<?php echo '?v='.get_version(); ?>">
		
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-1536x2008.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-1496x2048.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-768x1004.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-748x1024.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-1242x2148.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-1182x2208.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-750x1294.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-640x1096.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-640x920.png" media="screen" />
		<link rel="apple-touch-startup-image" href="https://jdmdigital.co/wapp/apple-touch-startup-image-320x460.png" media="screen" />

		<link rel="shortcut icon" href="https://static-jdmdigital.netdna-ssl.com/wapp/favicon.ico"/>
		<link rel="apple-touch-icon" href="https://static-jdmdigital.netdna-ssl.com/wapp/favicon-chrome.png" media="screen" />
		<link rel="apple-touch-icon" sizes="76x76" href="https://static-jdmdigital.netdna-ssl.com/wapp/icon76.png" media="screen"/>
		<link rel="apple-touch-icon" sizes="120x120" href="https://static-jdmdigital.netdna-ssl.com/wapp/icon120.png" media="screen"/>
		<link rel="apple-touch-icon" sizes="152x152" href="https://static-jdmdigital.netdna-ssl.com/wapp/icon152.png" media="screen"/>
		<link rel="icon" sizes="192x192" href="https://static-jdmdigital.netdna-ssl.com/wapp/favicon-chrome.png" media="screen"/>
		<meta name="msapplication-square310x310logo" content="https://static-jdmdigital.netdna-ssl.com/wapp/square.png">
		<meta name="msapplication-square70x70logo" content="https://static-jdmdigital.netdna-ssl.com/wapp/tiny.png">
		<meta name="msapplication-square150x150logo" content="https://static-jdmdigital.netdna-ssl.com/wapp/square.png">
		<meta name="msapplication-wide310x150logo" content="https://static-jdmdigital.netdna-ssl.com/wapp/wide.png">
		
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
      				<a class="navbar-brand" href="#">BS v3 Multi-Dropdown</a>
    			</div>
				<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Demo <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Menu Item</a></li>
						<li><a href="#">Menu Item</a></li>
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#" class="dropdown-submenu-toggle">Second Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Sub-Menu Item</a></li>
								<li><a href="#">Sub-Menu Item</a></li>
								<li><a href="#">Sub-Menu Item</a></li>
							</ul>
						</li>
						<li><a href="#">Menu Item</a></li>
						<li><a href="#">Menu Item</a></li>
					  </ul>
					</li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="https://jdmdigital.co/news/codex/bootstrap-3-secondary-dropdown-menu/">Article</a></li>
						<li><a href="bootstrap-multilevel-nav-demo.zip" download>Download v1</a></li>
						<li><a href="bootstrap-multilevel-nav-demo2.zip" download>Download v2</a></li>
					  </ul>
					</li>
					<li><a href="bootstrap-multilevel-nav-demo2.zip" download>Download</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /container -->
		</nav>

		<main role="main">

			<div class="jumbotron">
				<div class="container">
					<h1>Multi-Dropdown Demo</h1>
					<p>A quick multi-dropdown demo in <strong>Bootstrap v3.3.7</strong>.  There's also a version for Bootstrap v4.x coming soon.</p>
					<p><a class="btn btn-default btn-lg" href="https://jdmdigital.co/news/codex/bootstrap-3-secondary-dropdown-menu/" role="button">Article</a> <a class="btn btn-primary btn-lg" href="bootstrap-multilevel-nav-demo.zip" role="button" download>Download</a></p>
				</div>
			</div>
			
			<div class="container demo-wrapper">
				<p>Bootstrap 3 navbars don't support secondary dropdowns, but we can certainly make them.  Here's a demo of how we did it.</p>
				<h2>Here's the Goal</h2>
				<p>Here's the goal. We want Bootstrap to support secondary or multi-level dropdowns. By that we mean:</p>
				<ul>
					<li>About
						<ul>
							<li>Dropdown Menu Item
								<ul>
									<li><b>Secondary Dropdown Menu Item</b></li>
									<li><b>Secondary Dropdown Menu Item</b></li>
								</ul>
							</li>
							<li>Menu Item</li>
							<li>Menu Item</li>
						</ul>
					</li>
 					<li>Contact</li>
				</ul>
				<p>If that's confusing, just click on "Dropdown" in the navigation above and then on "Second Dropdown" to see what we're doing in action.</p> 
				<h2>What About WordPress?</h2>
				<p>Glad you asked!  We've also created a fork of the <code>wp_bootstrap_nav_walker</code> class to use in your custom WordPress theme builds so your Bootstrap v3 WordPress themes can use the built-in WordPress menu system AND support secondary dropdowns.</p>
			</div><!-- /container -->
		</main>

    	<footer>
			<div class="container">
				<p>Designed by <a href="https://jdmdigital.co">JDM Digital</a>; Copyright &copy; <?php echo date('Y'); ?> | <?php echo 'v'.get_version(); ?></p>
			</div>
		</footer>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="demo-scripts.js<?php echo '?v='.get_version(); ?>"></script>
	</body>
</html>
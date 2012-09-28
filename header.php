
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Many Hopes | Imagine you can.</title>
  <meta name="description" content="Many Hopes is raising the generation of children who will lead with justice and fairness and defeat the causes of extreme poverty in Kenya"/>
  <meta name="author" content="Metapattern"/>
	<meta property="og:title" content="Many Hopes | Imagine You Can." />
	<meta property="og:description" content="Many Hopes is raising the generation of children who will lead with justice and fairness and defeat the causes of extreme poverty in Kenya." />	
	<meta property="og:type" content="non_profit" />
	<meta property="og:url" content="http://www.manyhopes.org" />
	<meta property="og:image" content="http://manyhopes.org/img/mh_ss.jpg" />
	<meta property="og:site_name" content="Many Hopes" />
	<meta property="fb:admins" content="500074900" />


  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="favicon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/960_12_col.css">
  <link rel="stylesheet" href="css/nivo-slider.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/shadowbox.css">
  <link rel="stylesheet" href="css/uniform.default.css">
  <link rel="stylesheet" href="css/jquery.qtip.min.css">

  <link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>




  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr.js"></script>

</head>

<body>
	<?php include_once("analytics.php") ?>
    <header>
		<div id="meta-bar">
			<div class="container_12">
				<a href="/" id="meta-logo" class="grid_2"><img src="img/meta-logo.png"></a>
				<ul id="meta-connect" class="grid_10">
					<a href="donate.php"><li class="100">100% of your donation goes direct to mission</li></a>
					<a href="donate.php"><li class="donate ir">Donate</li></a>					
					<a href="help.php"><li class="help">Get Involved</li></a>
					<a href="about.php"><li class="about">About Us</li></a>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="main-bar">
			<div class="container_12">
				<ul id="main-nav" class="grid_12">
					<lh class="home"><a href="/" id="main-logo" class="grid_4"><img src="img/logo-main.png"></a></lh>
					<li class="manifesto<?php if ($thisPage=="manifesto") echo " current"; ?>"><a href="manifesto.php">Manifesto</a></li>
					<li class="story<?php if ($thisPage=="story") echo " current"; ?>"><a href="story.php">Story</a></li>
					<li class="projects<?php if ($thisPage=="projects") echo " current"; ?>"><a href="projects.php">Projects</a></li>
					<li class="blog<?php if ($thisPage=="blog") echo " current"; ?>"><a href="http://blog.manyhopes.org" target="_blank">Blog</a></li>
				</ul>

				<div class="clear"></div>
				<div class="grid_12" id="on"><img src="img/on.png"></div>
			</div>
		</div>
    </header>
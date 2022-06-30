<?php 
$title = 'Learning PHP Template Challenge';
$description = 'Description goes here.';
$author = 'Joe Casabona';
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<h1><?php echo $title; ?></h1>
			<nav>
				<ul>
					<li><a href="about.php">About Me</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main>
            <h2>Welcome!</h2>
            <p>Hello world! This is my PHP website!</p>
        </main>
	</div>
	<footer>
		<p>&copy; <?php echo $author; ?> - <?php echo date('Y'); ?></p>
	</footer>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
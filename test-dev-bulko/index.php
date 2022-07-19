
<?php
require './vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>TestBulko - 2017</title>
	<meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
	<link rel="icon" type="image/vnd.microsoft.icon" href="http://www.bulko.net/templates/img/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.bulko.net/templates/img/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="/asset/css/styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<header>
		<div class="wrapper">
			<a class="logo-bulko" href="http://www.bulko.net/" title="Logo Agence Bulko"><img src="/asset/img/logoBulko.png" alt="Logo Agence Bulko" ></a>
			<a class="logo-github" href="https://github.com/Bulko/test-dev-bulko/blob/master/README.md" title="Lire les consignes" target="_blank" rel="noopener">
				<img src="/asset/img/github-icon.png" alt="Logo github">README.md
			</a>
			<a href="/" title="home page">Home</a>
			<a href="/message" title="messages en vrac">Messages</a>
		</div>
	</header>


	<?php
	// routing
	$urlArray = explode('/', $_SERVER['REQUEST_URI']);
	$route = $urlArray[1];
	isset($urlArray[2]) ? $request = $urlArray[2] : '';

	// home
	if($route === '/' || $route === ''){
		include_once './Views/Home.php';
	}

	// message
	if($route === 'message'){
		if(isset($request)){
			include_once './Views/SingleMessage.php';
		} else{
	   		include_once './Views/Messages.php';
		}
	}

	?>


	
	<footer>
		<p>© Bulko - 2017<br>🦄  GLHF</p>
	</footer>
</body>
</html>

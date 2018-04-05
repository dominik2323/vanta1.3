<?php
	// menu-responsive branch
	session_start(); 
	include ('./inc/Router.php');
	$router = new Router();
	$getpagename = $router->GetPageName();
	$getfullurl = $router->GetFullUrl();
	$lang = $router->includeLang();
	switch ($getpagename) 
	{
		case 'spoluprace':
			$pagetitle = $lang['spoluprace'];
			break;
		case 'project':
			$id = explode('/', $_SERVER['REQUEST_URI']);
			if ($_SESSION['lang'] == 'cs') {
				$langproject = parse_ini_file('./layout/projects/lang/'.$id[2].'_cs.ini');
			}
			else
			{
				$langproject = parse_ini_file('./layout/projects/lang/'.$id[2].'_en.ini');
			}			
			$pagetitle = $langproject[1];
			break;
		case '':
			$pagetitle = "";
			$getpagename = "default";
			break;
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> 
		<link rel="stylesheet" href="../css/def.css" type="text/css" />
		<link rel="stylesheet" href="../css/<?php echo $getpagename; ?>.css" type="text/css" />
		<?php
			if (!@empty($langproject[1])) {
				echo '<link rel="stylesheet" href="../layout/projects/css/'.$id[2].'.css" type="text/css" />';
			}
		?>
		<title>VANTA LAB<?php if (!empty($pagetitle)) {echo '&emsp;|&emsp;'.$pagetitle;}?></title>
		<!--
		<script>document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./js/menu-mobil.js"></script>
		<script src="./js/lottie.js"></script>
		<script src="./js/scrollDown.js"></script>
		<script src="./js/slideDown.js"></script>
		<script src="./js/loading.js"></script>
		<script src="./js/color.js"></script>		
	</head>
	<body>
	<div id="loading"></div>
	<div class="menu">
		<a class="logo" href="/">
				VANTA LAB
		</a>
		<div class="nav">	
			<a href="#kontakt">
				<?php echo $lang['spoluprace']; ?>
			</a>
			
			<a <?php if ($_SESSION['lang'] == 'cs') {echo 'class="active"';} ?> href="../lang.php?lang=en&backurl=<?php echo $getfullurl; ?>">
				&emsp;EN 
			</a>
			<a>|</a>
			<a <?php if ($_SESSION['lang'] == 'en') {echo 'class="active"';} ?> href="../lang.php?lang=cs&backurl=<?php echo $getfullurl; ?>">
				CS&emsp; 
			</a>

			<a class="hamb" href="javascript:void(0);">
				&#9776;
			</a>
		</div>				
	</div>	
		<?php 
			$router->GetFile($lang);
		?>
	<div id="kontakt" class="foot">
		<div>
			<a class="fb" href="javascript:void(0);"></a>
			<a class="inst" href="javascript:void(0);"></a>
		</div>
		<ul>
			<li>
				<h4>e-mail</h4>
				<p>info@vantalab.cz</p>
			</li>
			<li>
				<h4>telefon</h4>
				<p>724 468 834</p>
			</li>
			<li>
				<h4>adresa</h4>
				<p>Brno, Botanická 59</p>
			</li>
		</ul>
	</div>
	</body>
</html>
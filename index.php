<?php
	// temporary branch
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
		<script>document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./js/menu-mobil.js"></script>
		<?php
		switch ($getpagename) {
			case 'default':
				echo ('<script src="./js/loading.js"></script>
					<script src="./js/color.js"></script>');
				break;

			case 'project':
				echo ('<script src="../js/scroller.js"></script>');
				break;
		}
		?>
		
	</head>
	<body>
	<?php
	if ($getpagename == "default") {
		echo ('<div id="loading"></div>');
	}
	?>
	<div class="menu">
		<a class="logo" href="/">
			VANTA LAB
		</a>
		<div class="nav">
			<ul>
				<li class="section">	
					<a <?php if ($getpagename == 'cooperation') {echo 'class="active"';} ?> href="#about">
						<?php echo $lang['spoluprace']; ?>
					</a>
				</li>
				<li>
					<a class="lang<?php if ($_SESSION['lang'] == 'en') {echo ' active';} ?>" href="../lang.php?lang=en&backurl=<?php echo $getfullurl; ?>">EN
					</a>
				</li>
				<div class="slash"></div>
				<li>
					<a class="lang<?php if ($_SESSION['lang'] == 'cs') {echo ' active';} ?>" href="../lang.php?lang=cs&backurl=<?php echo $getfullurl; ?>">CS
					</a>
				</li>
			</ul>
		</div>				
	</div>		
		<?php
			$router->GetFile($lang);
		?>
	<div class="foot">
		<a href="#"><img src="../../img/ikony/fb.png" alt="facebook" /></a>
		<a href="#"><img src="../../img/ikony/insta.png" alt="instagram" /></a>
	</div>
	</body>
</html>
<?php
$id = explode('/', $_SERVER['REQUEST_URI']);
if ($_SESSION['lang'] == 'cs') {
	$langproject = parse_ini_file('./layout/projects/lang/'.$id[2].'_cs.ini');
}
else
{
	$langproject = parse_ini_file('./layout/projects/lang/'.$id[2].'_en.ini');
}	
require_once ('./inc/SelectProject.php');
$selectproject = new SelectProject();
$anotherproject = $selectproject->AnotherProject();
?>
<div id="1" class="cover"></div>
<div class="slide">
	<div class="spacer100"></div>
	<h3>
		<?php echo($langproject['h3'][0]); ?>
	</h3>
	<h1>
		<?php echo($langproject['h1'][0]); ?>
	</h1>
	<p>
		<?php echo($langproject['p'][0]); ?>
	</p>
	<div class="spacer150"></div>
	<div class="grid four">
		<div>
			<img src="../layout/projects/img/2/ikony/zakladna.png" alt="">
			<h3>
				<?php echo($langproject['h3'][1]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][1]); ?>
			</p>
		</div>
		<div>
			<img src="../layout/projects/img/2/ikony/centrala.png" alt="">
			<h3>
				<?php echo($langproject['h3'][2]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][2]); ?>
			</p>
		</div>
		<div>
			<img src="../layout/projects/img/2/ikony/zdroj.png" alt="">
			<h3>
				<?php echo($langproject['h3'][3]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][3]); ?>
			</p>
		</div>
		<div>
			<img src="../layout/projects/img/2/ikony/mozek.png" alt="">
			<h3>
				<?php echo($langproject['h3'][4]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][4]); ?>
			</p>
		</div>
	</div>
	<div class="spacer150"></div>
	<div class="grid three">
		<div>
			<img src="../layout/projects/img/2/ikony/hmotny.png" alt="">
			<h3>
				<?php echo($langproject['h3'][5]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][5]); ?>
			</p>
		</div>
		<div>
			<img src="../layout/projects/img/2/ikony/cross.png" alt="">
		</div>
		<div>
			<img src="../layout/projects/img/2/ikony/nehmotny.png" alt="">
			<h3>
				<?php echo($langproject['h3'][6]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][6]); ?>
			</p>
		</div>
	</div>
</div>

<div class="scroller">
	<ul>
		<li>
				<a href="#1">Nahoru</a>
		</li>
		<li>
			<a href="<?php echo '/project/'.$anotherproject; ?>">Jiný projekt</a>
		</li>
	</ul>		
</div>
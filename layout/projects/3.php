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
	<div class="spacer200"></div>
	<div class="content">
		<h1>
			<?php echo($langproject['h1'][0]); ?>
		</h1>
		<h3>
			<?php echo($langproject['h3'][0]); ?>
		</h3>
		<p>
			<?php echo($langproject['p'][0]); ?>
		</p>
	</div>
	<div class="spacer150"></div>
	<div class="grid four a">
		<div>
			<img src="../layout/projects/img/3/ikony/kompakt.png" alt="" />
			<h3>
				<?php echo($langproject['h3'][1]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][1]); ?>
			</p>	
		</div>
		<div>
			<img src="../layout/projects/img/3/ikony/efektivita.png" alt="" />
			<h3>
				<?php echo($langproject['h3'][2]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][2]); ?>
			</p>	
		</div>
		<div>
			<img src="../layout/projects/img/3/ikony/sila.png" alt="" />
			<h3>
				<?php echo($langproject['h3'][3]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][3]); ?>
			</p>	
		</div>
		<div>
			<img src="../layout/projects/img/3/ikony/progres.png" alt="" />
			<h3>
				<?php echo($langproject['h3'][4]); ?>
			</h3>
			<p>
				<?php echo($langproject['p'][4]); ?>
			</p>	
		</div>
	</div>
</div>
<div class="slide c">
	<img src="../layout/projects/img/3/haart_detail.png" alt="" />
</div>
<div class="slide b">
	<div class="grid three">
		<div>
			<h1>
				<?php echo($langproject['h1'][1]); ?>
			</h1>
			<img src="../layout/projects/img/3/skici-var1.png" alt="" />
		</div>
		<div>
			<h1>
				<?php echo($langproject['h1'][2]); ?>
			</h1>
			<img src="../layout/projects/img/3/skici-var2.png" alt="" />
		</div>
		<div>
			<h1>
				<?php echo($langproject['h1'][3]); ?>
			</h1>
			<img src="../layout/projects/img/3/skici-var3.png" alt="" />
		</div>
	</div>
</div>
<div class="spacer200"></div>
	<div class="grid two a">
		<div>
			<img src="../layout/projects/img/3/vyhledove-uhly.png" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/3/zadni-pohled.png" alt="" />
		</div>
	</div>
<div class="spacer200"></div>
<div class="slide d">
	<img src="../layout/projects/img/3/haart_promo_b&w.png" alt="" />
</div>
<div class="c">
	<img src="../layout/projects/img/3/haart_orange.png" alt="" />
</div>
	<div class="grid four f">
		<div>
			<img src="../layout/projects/img/3/model_1.png" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/3/model_2.png" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/3/model_3.png" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/3/model_4.png" alt="" />
		</div>
	</div>
<div>
	<img src="../layout/projects/img/3/haart-white.png" alt="" />
</div>
<div class="grid two f">
	<div>
		<img src="../layout/projects/img/3/model_5.png" alt="" />
	</div>
	<div>
		<img src="../layout/projects/img/3/model_6.png" alt="" />
	</div>
</div>
<div class="scroller">
	<ul>
		<li>
			<a href="#1"><img src="../../img/ikony/scrollup.png" alt=""></a>
		</li>
		<li>
			<a href="<?php echo '/project/'.$anotherproject; ?>">Jiný projekt</a>
		</li>
	</ul>		
</div>
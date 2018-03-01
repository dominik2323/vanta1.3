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
<div id="add_scroller" class="slide">
	<div class="spacer100"></div>
	<div class="content">
		<div class="logo_cite"><img src="../layout/projects/img/1/cite-logo.jpg" alt="MM Cité logo" /></div>
		<h1>
			<?php echo($langproject['h1'][0]); ?>
		</h1>
		<p>
			<?php echo($langproject['p'][0]); ?>
		</p>
		<div class="spacer25"></div>
		<div class="mini-hr"></div>
		<h2>
			<?php echo($langproject['h2'][0]); ?>
		</h2>
		<p>
			<?php echo($langproject['p'][1]); ?>
		</p><br />
		<p>
			<?php echo($langproject['p'][2]); ?>
		</p>
		<div class="spacer50"></div>
		<img src="../layout/projects/img/1/schema-lavicky.jpg" alt="Schéma lavičky" />
		<div class="spacer50"></div>
	</div>
</div>	

	<div class="grid shortgrid">
		<div>
			<img src="../layout/projects/img/1/lavicka-grid-2.jpg" alt="Schéma lavičky" />
		</div>
		<div>
			<img src="../layout/projects/img/1/lavicka-grid-1.jpg" alt="Schéma lavičky" />
		</div>
	</div>
	<div class="spacer100"></div>
	<div class="content">
		<h2>
			<?php echo($langproject['h2'][1]); ?>
		</h2>
		<p>
			<?php echo($langproject['p'][3]); ?>
		</p>
	</div>
	<div class="spacer100"></div>

<div class="slide">
	<img class="wide" src="../layout/projects/img/1/noha.jpg" alt="Michalova noha" />
</div>

	<div class="spacer100"></div>
	<div class="content">
		<p>
			<?php echo($langproject['p'][4]); ?>
		</p>
		<br />	

		<p>
			<?php echo($langproject['p'][5]); ?>
		</p>
		<br />

		<p>
			<?php echo($langproject['p'][6]); ?>
		</p>
		<br />
	</div>
	<div class="spacer100"></div>

<div class="slide">
	<img class="wide" src="../layout/projects/img/1/lavicka-trojuhelnik.jpg" alt="Lavička var 1" />
</div>
	<div class="grid">
		<div>
			<img src="../layout/projects/img/1/ugot.jpg" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/1/IMG_8861b.jpg" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/1/sssdeed.jpg" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/1/samos_prih.jpg" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/1/kjzh.jpg" alt="" />
		</div>
		<div>
			<img src="../layout/projects/img/1/ccccsf.jpg" alt="" />
		</div>
	</div>
<div class="logotype-bench">
	<img src="../layout/projects/img/1/serpenta.jpg" alt="" />
</div>
<div class="slide">
	<img class="wide" src="../layout/projects/img/1/serpenta-render.jpg" alt="" />
</div>
	<div class="spacer100"></div>
	<div class="content">
		<img src="../layout/projects/img/1/serpenta-schema.jpg" alt="" />
	</div>
	<div class="spacer100"></div>

<div class="slide">
	<img class="wide" src="../layout/projects/img/1/serpenta-render-2.jpg" alt="" />
</div>
<div class="logotype-bench">
	<img src="../layout/projects/img/1/kontura.jpg" alt="" />
</div>
<div class="slide">
	<img class="wide" src="../layout/projects/img/1/kontura-render.jpg" alt="" />
</div>
<div class="spacer100"></div>
	<div class="content">
		<img src="../layout/projects/img/1/kontura-schema.jpg" alt="" />
	</div>
	<div class="logotype-bench">
		<img src="../layout/projects/img/1/invisi.jpg" alt="" />
	</div>
<div class="slide">
	
	<img class="wide" src="../layout/projects/img/1/invisi-render.jpg" alt="" />
</div>
<div class="content">
	<div class="spacer200"></div>
		<img src="../layout/projects/img/1/invisi-schema.jpg" alt="" />
	<div class="spacer100"></div>
</div>
<div>
	<img class="wide" src="../layout/projects/img/1/outro.jpg" alt="" />
</div>
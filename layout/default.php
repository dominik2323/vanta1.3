		<div class="content">
			<div class="intro">
				<h2>
					<?php
						echo $lang['subline'];
					?>
				</h2>
				<h1>
					<?php 
						echo $lang['claim'][random_int(0, sizeof($lang['claim'])-1)]; 
					?>
				</h1>

				<a href="javascript:void(0);" id="scrollDown"></a>
			</div>
			<div id="grid" class="grid">
				<div class="item01">		
						<img src="img/landingpage/server.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['konica'][0]; ?></h4>		
							<p><?php echo $lang['konica'][1]; ?></p>
						</div>
						<img id="id01" class="remove" src="img/landingpage/server_col.jpg" />
				</div>

				<div class="item02">					
						<img src="img/landingpage/generator.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['gentec'][0]; ?></h4>
							<p><?php echo $lang['gentec'][1]; ?></p>
						</div>
						<img id="id02" class="remove" src="img/landingpage/generator_col.jpg" />
				</div>

				<div class="item03">					
						<img src="img/landingpage/kombajn.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['kombajn'][0]; ?></h4>
							<p><?php echo $lang['kombajn'][1]; ?></p>
						</div>
						<img id="id03" class="remove" src="img/landingpage/kombajn_col.jpg" />
				</div>

				<div class="item04">					
						<img src="img/landingpage/vyhledavac.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['vyhledavac'][0]; ?></h4>
							<p><?php echo $lang['vyhledavac'][1]; ?></p>
						</div>
						<img id="id04" class="remove" src="img/landingpage/vyhledavac_col.jpg" />
				</div>

				<div class="item05">				
						<img src="img/landingpage/lavicka.jpg" />
						<div class="envelope white">
							<h4><?php echo $lang['lavicka'][0]; ?></h4>
							<p><?php echo $lang['lavicka'][1]; ?></p>
						</div>
						<img id="id05" class="remove" src="img/landingpage/lavicka_col.jpg" />
				</div>

				<div class="item06">				
						<img src="img/landingpage/traktor.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['traktor'][0]; ?></h4>
							<p><?php echo $lang['traktor'][1]; ?></p>
						</div>
						<img id="id06" class="remove" src="img/landingpage/traktor_col.jpg" />
				</div>

				<div class="item07">				
						<img src="img/landingpage/electrolux.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['electrolux'][0]; ?></h4>
							<p><?php echo $lang['electrolux'][1]; ?></p>
						</div>
						<img id="id07" class="remove" src="img/landingpage/electrolux_col.jpg" />
				</div>

				<div class="item08">				
						<img src="img/landingpage/pila.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['pila'][0]; ?></h4>
							<p><?php echo $lang['pila'][1]; ?></p>
						</div>
						<img id="id08" class="remove" src="img/landingpage/pila_col.jpg" />
				</div>

				<div class="item09">				
						<img src="img/landingpage/tramvaj.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['tramvaj'][0]; ?></h4>
							<p><?php echo $lang['tramvaj'][1]; ?></p>
						</div>
						<img id="id09" class="remove" src="img/landingpage/tramvaj_col.jpg" />
				</div>

				<div class="item10">				
						<img src="img/landingpage/pece.jpg" />
						<div class="envelope">
							<h4><?php echo $lang['kornfeil'][0]; ?></h4>
							<p><?php echo $lang['kornfeil'][1]; ?></p>
						</div>
						<img id="id10" class="remove" src="img/landingpage/pece_col.jpg" />
				</div>

				<div class="item11">				
						<img src="img/landingpage/auto.jpg" />
						<div class="envelope white">
							<h4><?php echo $lang['skici'][0]; ?></h4>
							<p><?php echo $lang['skici'][1]; ?></p>
						</div>
						<img id="id11" class="remove" src="img/landingpage/auto_col.jpg" />
				</div>
			</div>
		</div>
		<div class="about">
				<h4>
					<?php echo $lang['h4'][0]; ?>
				</h4>
				<h1>
					<?php echo $lang['h1'][0]; ?>
				</h1>
				<div class="postup">
					<h4>
						<?php echo $lang['h4'][1]; ?>
					</h4>
					<div class="faze">
						<div><h5><?php echo $lang['faze']; ?></h5></div>
						<div>01</div>
						<div class="trychtyr"></div>
						<div><p><?php echo $lang['faze_reserse'][0]; ?></p></div>
					</div>
					<ul>
						<li class="slideDown">
							<div>A</div>
							<p><?php echo $lang['reserse_li'][0]; ?></p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li><?php echo $lang['reserse_li_ul'][0]; ?></li>
								<li><?php echo $lang['reserse_li_ul'][1]; ?></li>
								<li><?php echo $lang['reserse_li_ul'][2]; ?></li>
								<li><?php echo $lang['reserse_li_ul'][3]; ?></li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>B</div>
							<p><?php echo $lang['reserse_li'][1]; ?></p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li><?php echo $lang['reserse_li_ul'][4]; ?></li>
								<li><?php echo $lang['reserse_li_ul'][5]; ?></li>
								<li><?php echo $lang['reserse_li_ul'][6]; ?></li>
							</ul>
						</li>
						<div class="line"></div>
						<li>
							<div>C</div>
							<p><?php echo $lang['reserse_li'][2]; ?></p>
						</li>
					</ul>

					<div class="faze">
						<div><h5><?php echo $lang['faze']; ?></h5></div>
						<div>02</div>
						<div class="pencil"></div>
						<div><p><?php echo $lang['faze_navrh'][0]; ?></p></div>
					</div>
					<ul>
						<li class="slideDown">
							<div>A</div>
							<p>Vize</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>B</div>
							<p>Hmotové studie</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>C</div>
							<p>Fyzické modely</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>D</div>
							<p>Vizualizace</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
					</ul>

					<div class="faze">
						<div><h5><?php echo $lang['faze']; ?></h5></div>
						<div>03</div>
						<div class="vyroba"></div>
						<div><p><?php echo $lang['faze_nazev'][2]; ?></p></div>
					</div>
					<ul>
						<li class="slideDown">
							<div>A</div>
							<p>Dotažení návrhu pro výrobu</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>B</div>
							<p>Příprava dat pro výrobu</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>C</div>
							<p>Supervize</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
					</ul>

					<div class="faze">
						<div><h5><?php echo $lang['faze']; ?></h5></div>
						<div>04</div>
						<div class="graf"></div>
						<div><p><?php echo $lang['faze_nazev'][3]; ?></p></div>
					</div>
					<ul>
						<li class="slideDown">
							<div>A</div>
							<p>Příprava grafické prezentace produktu</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
						<div class="line"></div>
						<li class="slideDown">
							<div>B</div>
							<p>Návrh uživatelských rozhraní</p>
							<div class="plus"></div>
							<ul style="display: none;">
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>
								<li>bla</li>	
							</ul>
						</li>
					</ul>
				</div>
			<h4><?php echo $lang['h4'][2]; ?></h4>
			<div class="foto">
				<div>
					<img src="./img/tym/blaha.png" alt="Tomáš Blaha" />
					<p><?php echo $lang['tym'][0]; ?></p>
					<a class="in" href="javascript:void(0);"></a>
					<a class="inst" href="javascript:void(0);"></a>
				</div>
				<div>
					<img src="./img/tym/blank.png" alt="" />
					<p><?php echo $lang['tym'][1]; ?></p>					
					<a class="in" href="javascript:void(0);"></a>
					<a class="inst" href="javascript:void(0);"></a>
				</div>
				<div>
					<img src="./img/tym/blank.png" alt="" />
					<p><?php echo $lang['tym'][2]; ?></p>
					<a class="in" href="javascript:void(0);"></a>
					<a class="inst" href="javascript:void(0);"></a>
				</div>
				<div>
					<img src="./img/tym/blank.png" alt="" />
					<p>Dominik Tomčík</p>
					<a class="in" href="javascript:void(0);"></a>
					<a class="inst" href="javascript:void(0);"></a>
				</div>
			</div>
		</div>
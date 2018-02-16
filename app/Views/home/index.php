<section id="intro">
	<div class="parallax-container">
		<div class="overlay"></div>
		<div class="parallax">
			<img src="img/chapitres/chapitre2.jpg">
		</div>
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="section-title">
							<h1 class="main-title">Billet simple pour l'Alaska</h1>
							<div class="subtitle">Le dernier roman de <a class="scroll" href="#about" title="En savoir d'avantage sur Jean Forteroche.">Jean Forteroche</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col s12 m7">
				<div class="section-title">
					<h2 class="main-title">Jean Forteroche</h2>
					<div class="subtitle">Acteur et écrivain</div>
				</div>
				<div class="about-desc">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis blandit orci. Sed finibus mauris in est auctor rutrum. Sed vitae ullamcorper lectus, non commodo risus. In urna velit, rutrum eu diam blandit, aliquam sagittis nulla. Aliquam ultrices placerat metus a accumsan. Maecenas non imperdiet dui, vel facilisis nibh. Vestibulum in nisi vehicula, condimentum dui eu, pellentesque quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis metus orci. Aliquam rhoncus dolor sed massa porttitor vestibulum.</p>
				</div>
			</div>
			<div class="col s12 m4 offset-m1">
				<div class="about-pict">
					<img class="responsive-img" src="img/jean.jpg" alt="Jean Forteroche, acteur et écrivain">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="last-chapter">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="section-title">
					<h2 class="main-title center-align">Les derniers chapitres</h2>
				</div>
				<div class="content">
					<div class="row">
						<?php foreach ($posts as $post): ?>   
							<div class="col s12 m12 l6">
								<div class="chapter-desc">
									<a href="<?= $post->url; ?>" title="Découvrir le <?= $post->title; ?>">
										<?= $post->image; ?>
										<div class="infos">
											<h3><?= $post->title; ?></h3>
											<div class="subtitle"><?= $post->date; ?></div>
										</div>
									</a>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<div class="more-link right-align">
						<a href="?p=posts.index">Voir tous les chapitres</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

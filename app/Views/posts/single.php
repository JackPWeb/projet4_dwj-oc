<section id="single-intro">
	<div class="parallax-container">
		<div class="overlay"></div>
		<div class="parallax">
			<?= $post->image; ?>
		</div>
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="section-title">
							<h1 class="main-title"><?= $post->title; ?></h1>
							<div class="subtitle"><?= $post->date; ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="article_<?= $post->id; ?>">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="post-content">
					<?= $post->content; ?>
				</div>
				<div class="more-link right-align">
					<a href="?p=posts.index">Retourner aux chapitres</a>
				</div>
			</div>
		</div>

		<a id="flow-toggle" class="btn-floating btn-large waves-effect waves-light tooltipped" title="Augmenter la taille du texte" data-position="right" data-delay=".5" data-tooltip="Loupe"><i class="material-icons">loupe</i></a>
	</div>
</section>
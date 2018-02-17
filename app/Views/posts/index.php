<section id="chapitres">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="section-title">
					<h1 class="main-title">Chapitres</h1>
					<div class="subtitle">La liste des <?= $totalPost[0]->nbPost; ?> chapitres</div>
				</div>
			
				<?php foreach ($posts as $post): ?>
				    <div id="articles_<?= $post->id; ?>">
				    	<div class="row">
				    		<div class="col s12">
								<div class="card">
									<div class="card-image">
										<a href="<?= $post->url; ?>">
											<?= $post->image; ?>
										</a>
										<span class="card-title">
											<?= $post->date; ?>
										</span>
									</div>
									<div class="card-content">
										<h2 class="post-title"><a href="<?= $post->url; ?>"><?= $post->title; ?></a></h2>
										<?= $post->excerpt; ?>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
				<?php endforeach ?>	

			</div>
		</div>
	</div>
</section>
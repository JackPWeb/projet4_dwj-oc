<section id="chapitres">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="section-title">
					<h1 class="main-title">Chapitres</h1>
					<div class="subtitle">La liste des <?= $totalPostPublic[0]->nbPost; ?> chapitres</div>
				</div>
			
				<div id="chapters-list">
					<?php foreach ($posts as $post): ?>
					    <div id="articles_<?= $post->id; ?>" class="single-chapter">
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

				<div id="pagination-chapter">
					<div class="row">
						<div class="col s12">
							<ul class="pagination right-align">
						  	<?php
						  		for ($i=1; $i <= $pagesTotales ; $i++) { 
						  			if ($i == $pageCourante) {
						  				echo '<li class="active"><span>'.$i.'</span></li>';
						  			}
						  			elseif ($i == $pageCourante+1) {
						  				echo '<li class="waves-effect"><a href="index.php?p=posts.index&page='.$i.'" class="suivant">'.$i.'</a></li>';
						  			}
						  			else{
						  				echo '<li class="waves-effect"><a href="index.php?p=posts.index&page='.$i.'">'.$i.'</a></li>';
						  			}
						  		}
						  	?>
						  	</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
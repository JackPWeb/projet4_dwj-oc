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

				<div class="nav-links">
					<?php
						if ($prev == false) {
							echo '<span class="nav-previous disabled"></span>';
						}else{
							echo $prev->prev;
						}
					?>
					
					<a class="back-to-list tooltipped" href="chapitres" title="Retourner aux chapitres" data-position="top" data-delay=".5" data-tooltip="Retourner aux chapitres">
						<i class="material-icons">apps</i>
					</a>

					<?php
						if ($next == false) {
							echo '<span class="nav-next disabled"></span>';
						}else{
							echo $next->next;
						}
					?>
				</div>
			</div>
		</div>

		<a id="flow-toggle" class="btn-floating btn-large waves-effect waves-light tooltipped front-bg-color" title="Augmenter la taille du texte" data-position="right" data-delay=".5" data-tooltip="Loupe"><i class="material-icons">loupe</i></a>
	</div>
</section>

<section id="commentaires">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="commentaires-title">
					<h3><?= $nbComments->totalComments; ?></h3>
				</div>

				<div class="commentaires-list">
					
					<ul class="collection">
					    <?php if ($comments != false) {		
							foreach ($comments as $comment){ 
								?>
								<li class="collection-item avatar">
						      		<i class="material-icons circle">person_outline</i>
						      		<span class="commentaire-title"><?= $comment->author; ?></span>
					      			<?= $comment->date; ?>
					         		<p class="commentaire-comment"><?= $comment->comment; ?></p>

						      		<?php						      		
					      		 	if ($comment->signaled == '1'){
						      			?>
											<a id="<?= $comment->id; ?>" class="secondary-content comment-report" title="Ce Commentaire à été signalé">
						      					<i class="material-icons">record_voice_over</i>
						      				</a>
						      			<?php
						      		}else{
						      			?>
											<a id="<?= $comment->id; ?>" class="secondary-content signaled" title="Signaler ce commentaire" onclick="Materialize.toast('Ce Commentaire à été signalé', 3000)">
						      					<i class="material-icons">record_voice_over</i>
						      				</a>
						      			<?php
						      		}
						      		?>
						    	</li>
						    	<?php
							}
						}
						else{
							?>
							<li class="collection-item">
								<p>Aucun commentaire n'a pour le moment été publié ...</p>
							</li>
							<?php
						}
						?>    		
				  	</ul>
				</div>

				<?php
					if ($pagesTotales > 1) {
						echo '<ul class="pagination right-align">';
						if ($pageCourante == 1) {
				  			echo '<li class="disabled"><span><i class="material-icons">chevron_left</i></span></li>';
				  		}
				  		else{
				  			echo '<li class="waves-effect"><a href="index.php?p=posts.single&id='.$post->id.'&page='.($pageCourante-1).'"><i class="material-icons">chevron_left</i></a></li>';
				  		}
				  		
				  		for ($i=1; $i <= $pagesTotales; $i++) { 
				  			if ($i == $pageCourante) {
				  				echo '<li class="active"><span>'.$i.'</span></li>';
				  			}
				  			else{
				  				echo '<li class="waves-effect"><a href="index.php?p=posts.single&id='.$post->id.'&page='.$i.'">'.$i.'</a></li>';
				  			}
				  		};

				  		if ($pageCourante == $pagesTotales) {
				  			echo '<li class="disabled"><span><i class="material-icons">chevron_right</i></span></li>';
				  		}
				  		else{
				  			echo '<li class="waves-effect"><a href="index.php?p=posts.single&id='.$post->id.'&page='.($pageCourante+1).'"><i class="material-icons">chevron_right</i></a></li>';
				  		}
				  		echo "</ul>";
					}
				?> 
				
			</div>
		</div>
	</div>
</section>

<section id="commentaires-form">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="commentaires-title">
					<h3>Laisser un commentaire:</h3>
				</div>

				<?php
				if (!empty($errors)) {
					foreach ($errors as $error) {
						echo '<div class="error-message red darken-1"><p><i class="material-icons">error_outline</i> '.$error.'</p></div>';
					}
				}
				?>

				<div class="commentaires-form-content">
							    	
			    	<form method="post">
						<div class="row">
							<div class="input-field col s12">
								<?= $form->input('author', 'Votre Pseudo'); ?>
							</div>

							<div class="input-field col s12">
								<?= $form->input('comment', 'Votre commentaire', ['type' => 'textarea']); ?>
							</div>

							<div class="input-field col s12">
								<?= $form->input('post_id', '', ['value' => $_GET['id'], 'type' => 'hidden']); ?>
							</div>

							<div class="input-field col s12">
								<?= $form->submit('Commenter'); ?>
							</div>
						</div>
					</form>
				  	
				</div>
				<div class="more-link right-align">
					<a href="chapitres">Retourner aux chapitres</a>
				</div>
			</div>
		</div>
	</div>
</section>
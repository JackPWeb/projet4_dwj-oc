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
					
					<a class="back-to-list tooltipped" href="?p=posts.index" title="Retourner aux chapitres" data-position="top" data-delay=".5" data-tooltip="Retourner aux chapitres">
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

						      		<?php if ($comment->signaled == '1'){
						      			?>
											<a id="<?= $comment->id; ?>" class="secondary-content tooltipped disabled comment-report" data-position="left" data-delay="50" data-tooltip="Ce Commentaire à été signalé">
						      					<i class="material-icons">record_voice_over</i>
						      				</a>
						      			<?php
						      		}else{
						      			?>
											<a href="#modal1" id="<?= $comment->id; ?>" class="secondary-content tooltipped signaled modal-trigger" data-position="left" data-delay="50" data-tooltip="Signaler ce commentaire">
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

				  	<div id="modal1" class="modal">
					    <div class="modal-content">
					      	<h4>Ce Commentaire viens d'etre Signalé</h4>
					    </div>
					    <div class="modal-footer">
					      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
					    </div>
				  	</div>

				</div>
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
								<?= $form->submit('Commenter'); ?>
							</div>
						</div>
					</form>
				  	
				</div>
				<div class="more-link right-align">
					<a href="?p=posts.index">Retourner aux chapitres</a>
				</div>
			</div>
		</div>
	</div>
</section>
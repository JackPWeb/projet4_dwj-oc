<section id="comments-admin">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="section-title">
					<h1 class="main-title">Commentaires</h1>
					<div class="subtitle">Administrer vos commentaires:</div>
				</div>

				<div id="resume-allComments">
					<div class="row">
						<div class="col s12">
							<table class="highlight responsive-table">
								<thead>
							  		<tr>
							      		<th>Chapitre</th>
							      		<th>Posté</th>
							      		<th>Auteur</th>
							      		<th>Commentaire</th>
							      		<th>Actions</th>
							  		</tr>
								</thead>

								<tbody>
							  		<?php foreach ($comments as $comment): ?>
							  			<tr>
								    		<td><?= $comment->post_id; ?></td>
								    		<td><?= $comment->date; ?></td>
								    		<td class="comment-author"><?= $comment->author; ?></td>
								    		<td class="comment-excerpt"><?= $comment->excerpt; ?></td>
								    		<td>
								    			<div class="form-action">
									    			<a href="#show-comment_<?= $comment->id; ?>" class="btn-floating green modal-trigger">
									    				<i class="material-icons">more_vert</i>
									    			</a>

									    			<form action="?p=admin.comments.delete" method="post">
									    				<input type="hidden" name="id" value="<?= $comment->id; ?>">
									    				<button class="btn-floating red" type="submit"><i class="material-icons">delete</i></button>
									    			</form>
									    		</div>
								    		</td>
								  		</tr>

								  		<div class="modal bottom-sheet" id="show-comment_<?= $comment->id; ?>">
									    	<div class="container">
									    		<div class="row">
									    			<div class="col s12">
									    				<div class="modal-content">
												    		<p class="modal-author"><span><?= $comment->author; ?></span> à écrit :</p>
												    		<p class="modal-comment"><?= $comment->comment; ?></p>
												    	</div>
												    	<div class="modal-footer">
												      		<a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Fermer</a>
													    </div>
									    			</div>
									    		</div>
									    	</div>
										</div>
							  		<?php endforeach ?>
								</tbody>
							</table>
							<ul class="pagination right-align">
						  	<?php
						  		if ($pageCourante == 1) {
						  			echo '<li class="disabled"><span><i class="material-icons">chevron_left</i></span></li>';
						  		}
						  		else{
						  			echo '<li class="waves-effect"><a href="administrer-mes-commentaires/page/'.($pageCourante-1).'"><i class="material-icons">chevron_left</i></a></li>';
						  		}
						  		
						  		for ($i=1; $i <= $pagesTotales; $i++) { 
						  			if ($i == $pageCourante) {
						  				echo '<li class="active"><span>'.$i.'</span></li>';
						  			}
						  			else{
						  				echo '<li class="waves-effect"><a href="administrer-mes-commentaires/page/'.$i.'">'.$i.'</a></li>';
						  			}
						  		};

						  		if ($pageCourante == $pagesTotales) {
						  			echo '<li class="disabled"><span><i class="material-icons">chevron_right</i></span></li>';
						  		}
						  		else{
						  			echo '<li class="waves-effect"><a href="administrer-mes-commentaires/page/'.($pageCourante+1).'"><i class="material-icons">chevron_right</i></a></li>';
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
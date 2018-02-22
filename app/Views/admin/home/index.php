<section id="cockpit">
	<div class="container">
		<div class="row">
			<div class="col s12">

				<div class="section-title">
					<h1 class="main-title">Cockpit</h1>
					<div class="subtitle">Administrer votre site:</div>
				</div>

				<div id="resume">
					<div class="row">
				        <div class="col s12 m6">
				          	<div class="card info-com">
				            	<div class="card-content white-text">
				              		<span class="card-title">Commentaires</span>
				              		<p class="center-align"><span><?= $totalComment[0]->nbTotal; ?></span> aux totals</p>
				            	</div>
				            	<div class="card-action">
				              		<a href="?p=admin.comments.index" class="white-text">Accéder aux commentaires</a>
				            	</div>
				          	</div>
				        </div>
				        <div class="col s12 m6">
				          	<div class="card info-post">
				            	<div class="card-content white-text">
				              		<span class="card-title">Chapitres</span>
				              		<p class="center-align"><span><?= $totalPost[0]->nbTotal; ?></span> aux totals</p>
				            	</div>
				            	<div class="card-action">
				              		<a href="?p=admin.posts.index" class="white-text">Accéder aux chapitres</a>
				            	</div>
				          	</div>
				        </div>
			      	</div>
		    	</div>

		    	<div id="resume-reported">
		    		<div class="row">
		    			<div class="col s12">
		    				<ul class="collapsible" data-collapsible="accordion">
							    <li>
							      	<div class="collapsible-header white-text active"><i class="material-icons">announcement</i>Commentaires Signaler</div>
							      	<div class="collapsible-body">
							      		<table class="highlight">
							      			<?php 
									  			if (!empty($comments_signaled)) {
									  				?>
								      			<thead>
											  		<tr>
											      		<th>Chapitre</th>
											      		<th>Posté le</th>
											      		<th>Autheur</th>
											      		<th>Commentaire</th>
											      		<th>Actions</th>
											  		</tr>
												</thead>
												<tbody>
											  		<?php foreach ($comments_signaled as $comment_signaled): ?>
											  			<tr>
												    		<td><?= $comment_signaled->post_id; ?></td>
												    		<td><?= $comment_signaled->date; ?></td>
												    		<td><?= $comment_signaled->author; ?></td>
												    		<td><?= $comment_signaled->excerpt; ?></td>
												    		<td>
												    			<div class="form-action">
													    			<form action="?p=admin.home.deleteReport" method="post">
													    				<input type="hidden" name="cancel-signaled_id" value="<?= $comment_signaled->id; ?>">
													    				<button class="btn-floating green" type="submit"><i class="material-icons">check</i></button>
													    			</form>

													    			<form action="?p=admin.home.delete" method="post">
													    				<input type="hidden" name="signaled_id" value="<?= $comment_signaled->id; ?>">
													    				<button class="btn-floating red" type="submit"><i class="material-icons">delete</i></button>
													    			</form>
													    		</div>
												    		</td>
												  		</tr>
											  		<?php endforeach ?>
										  		<?php
												}
										  		else{
									  				echo "<thead><tr>Aucun commentaire n'a été signalé.</tr></thead>";
									  			}
									  			?>
												</tbody>
							      		</table>
							      	</div>
							    </li>
							</ul>
		    			</div>
		    		</div>
		    	</div>

		    	<div id="resume-private">
		    		<div class="row">
		    			<div class="col s12">
		    				<ul class="collapsible" data-collapsible="accordion">
							    <li>
							      	<div class="collapsible-header white-text active"><i class="material-icons">visibility_off</i>Article non publié</div>
							      	<div class="collapsible-body">
							      		<table class="highlight">
									  		<?php 
									  			if (!empty($posts)) {
									  				?>
													<thead>
												  		<tr>
												      		<th>ID</th>
												      		<th>Miniature</th>
												      		<th>Titre</th>
												      		<th>Status</th>
												      		<th>Actions</th>
												  		</tr>
													</thead>
													<tbody>
									  				<?php
									  				foreach ($posts as $post) {
									  					?>
															<tr>
													    		<td><?= $post->id; ?></td>
													    		<td class="thumbnail"><?= $post->image; ?></td>
													    		<td><?= $post->title; ?></td>
													    		<td class="<?= $post->status; ?>"><?= $post->status; ?></td>
													    		<td>
													    			<div class="form-action">
														    			<form action="?p=admin.home.publishChapter" method="post">
														    				<input type="hidden" name="publish-chapter_id" value="<?= $post->id; ?>">
														    				<button class="btn-floating green" type="submit"><i class="material-icons">publish</i></button>
														    			</form>

														    			<form action="?p=admin.home.delete" method="post">
														    				<input type="hidden" name="unposted_id" value="<?= $post->id; ?>">
														    				<button class="btn-floating red" type="submit"><i class="material-icons">delete</i></button>
														    			</form>
														    		</div>
													    		</td>
													  		</tr>
									  					<?php
									  				}
									  			}
									  			else{
									  				echo "<thead><tr>Aucun chapitre en attente de publication.</tr></thead>";
									  			}
									  		?>
											</tbody>
							      		</table>
							      	</div>
							    </li>
							</ul>
		    			</div>
		    		</div>
		    	</div>

	      	</div>
	  	</div>
	</div>
</section>
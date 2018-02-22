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
											    			<a href="#" class="btn-floating green valid_comment"><i class="material-icons">check</i></a>
											    			<a href="#" class="btn-floating red delete_comment"><i class="material-icons">delete</i></a>
											    		</td>
											  		</tr>
										  		<?php endforeach ?>
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
													    			<a href="#" class="btn-floating green valid_comment"><i class="material-icons">publish</i></a>
													    			<a href="#" class="btn-floating red delete_comment"><i class="material-icons">delete</i></a>
													    		</td>
													  		</tr>
									  					<?php
									  				}
									  			}
									  			else{
									  				echo "<thead><tr>Tous les chapitres sont publié.</tr></thead>";
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
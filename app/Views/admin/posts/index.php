<section id="chapters-admin">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="section-title">
					<h1 class="main-title">Chapitres</h1>
					<div class="subtitle">Administrer vos chapitres:</div>
				</div>

				<div id="resume-allPosts">
					<div class="row">
						<div class="col s12">
							<p><a href="?p=admin.posts.add" class="btn btn-success blue lighten-2">Ajouter</a></p>

							<table class="highlight responsive-table">
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
							  		<?php foreach ($posts as $post): ?>
							  			<tr>
								    		<td><?= $post->id; ?></td>
								    		<td class="thumbnail"><?= $post->image; ?></td>
								    		<td><?= $post->title; ?></td>
								    		<td class="<?= $post->status; ?>"><?= $post->status; ?></td>
								    		<td>
								    			<div class="form-action">
								    				<a href="?p=admin.posts.edit&id=<?= $post->id; ?>" class="btn-floating green"><i class="material-icons">edit</i></a>

									    			<form action="?p=admin.posts.delete" method="post">
									    				<input type="hidden" name="id" value="<?= $post->id; ?>">
									    				<button class="btn-floating red" type="submit"><i class="material-icons">delete</i></button>
									    			</form>
								    			</div>
								    		</td>
								  		</tr>
							  		<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
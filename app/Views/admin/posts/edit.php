<section id="edit-chapter">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="section-title">
					<?php
						switch ($title) {
							case "Editer | Billez simple pour l'Alaska":
								echo '<h1 class="main-title">Editer</h1><div class="subtitle">Modifier ce chapitre:</div>';
								break;

							case "Ajouter | Billez simple pour l'Alaska":
								echo '<h1 class="main-title">Ajouter</h1><div class="subtitle">Publié un nouveau chapitre:</div>';
								break;	
						}
					?>
				</div>

				<div class="edit-form-content">
					<form method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="input-field col s12">
								<?= $form->input('title', 'Titre de l\'article'); ?>
							</div>

						    <div class="file-field input-field col s12">
						    	<?php
						    		if (isset($post->image_featured)) {
						    			?>
											<input type="file" name="image" class="dropify" data-default-file="<?= 'img/chapitres/' .$post->image_featured; ?>" data-allowed-file-extensions="jpg jpeg png">
						    			<?php
						    		}
						    		else{
						    			?>
											<input type="file" name="image" class="dropify" data-default-file="img/default.jpg" data-allowed-file-extensions="jpg jpeg png">
						    			<?php
						    		}
						    	?>
						    </div>

							<div class="input-field col s12">
								<?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
							</div>
						
							<div class="col s12">
						    	<p>Publié ?</p>
						    	<div class="switch">
								    <label>
								      Non
								      <input type="checkbox" name="status" <?php 
								      	if (isset($post)) {
								      		echo ($post->posted == "1")?"checked" : "";
								      	}?>	
								      >
								      <span class="lever"></span>
								      Oui
								    </label>
							  	</div>
						  	</div>

							<div class="input-field col s12">
								<?= $form->submit('Modifier'); ?>
								<a href="administrer-mes-chapitres" class="btn waves-effect waves-light red darken-1">Annuler</a>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>
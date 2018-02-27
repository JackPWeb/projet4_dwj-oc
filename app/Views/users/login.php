<section id="login-section">
	<div class="container">
		<div class="row">
			<div class="col s12 l8 offset-l2">
				
				<div class="section-title center-align">
					<h1 class="main-title">Connexion</h2>
					<div class="subtitle">Renseigner vos identifiants</div>
				</div>

				<?php if ($errors): ?>
					<div class="error-message red darken-1">
						<p><i class="material-icons">error_outline</i> Les identifiants saisies sont incorrects.</p>
					</div>
				<?php endif ?>

				<div class="login-form">
					<div class="card-panel">
			  			<div class="row">
			    			<form class="col s12" method="post">	      				
			      				<div class="row">
			        				<div class="input-field col s12">
			        					<?= $form->inputIcon('icon_pseudo', 'account_circle', 'username', 'Pseudo'); ?>
			        				</div>

			        				<div class="input-field col s12">
			        					<?= $form->inputIcon('icon_password', 'lock_outline', 'password', 'Mot de passe', ['type' => 'password']); ?>
			        				</div>

			        				<div class="input-field col s12 l10 offset-l1">
			        					<?= $form->submitIcon('lock_open', ' Login'); ?>	
		        					</div>
			      				</div>
			    			</form>
			  			</div>

			  			<div class="more-link center-align">
							<a href="accueil" title="Retourner à la page d'accueil">Retourner à la page d'accueil</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="page-title">
		<h1>Les derniers chapitres</h1>
	</div>
	<ul>
		<?php foreach ($posts as $post): ?>   
			<li><?= $post->title; ?></li>
		<?php endforeach ?>
	</ul>
</div>

<?php snippet('header') ?>

<div class="jumbotron">
	<h2><?php echo $site->title() ?></h2>
</div>

<div class="row mt">
	<?php foreach (page('prototypes')->children()->shuffle()->limit(8) as $p) : ?>
		<?php snippet('prototype-item', array('p' => $p)) ?>
	<?php endforeach ?>
</div>

<div class="mt center">
	<a class="btn btn-default" href="/prototypes">Voir tous les types -></a>
</div>

<?php snippet('footer') ?>
<h1 class="my-3"><?= $params['post']->title ?> </h1>
<div class="my-1">
    <?php foreach ($params['post']->getTags() as $tag) : ?>
        <span class="badge bg-success bg-gradient"><?= $tag->name ?></span>
    <?php endforeach ?>
</div>
<small class="badge bg-info bg-gradient my-1">Publié le <?= $params['post']->getCreatedAt() ?></small>
<p class="my-3"><?= $params['post']->content ?></p>
<a  href="articles.html" class="btn btn-secondary my-2">Retourner à la liste de tous les articles</a>
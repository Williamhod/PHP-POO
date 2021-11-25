<h1><?= $params['tag']->name ?></h1>

<?php foreach ($params['tag']->getPosts() as $post) : ?>
    <div class="card mb-3">
        <div class="card-body">
            <a href="article-<?= $post->id ?>.html" class="text-decoration-none text-black">
                <h2><?= $post->title ?></h2>
                <small class="badge bg-info bg-gradient">Publié le <?= (new DateTime($post->created_at))->format('d/m/Y à H:m') ?></small>
                <p><?= substr($post->content, 0, 200) . '...' ?></p>
            </a>
        </div>
    </div>
<?php endforeach ?>
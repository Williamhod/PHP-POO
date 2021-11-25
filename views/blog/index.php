<h1>Les derniers articles</h1>


<?php foreach ($params['posts'] as  $post) : ?>
    <div class="card my-5">
        <div class="card-body">
            <h2><?= $post->title ?></h2>
            <div>
                <?php foreach ($post->getTags() as $tag) : ?>
                    <span class="badge bg-success bg-gradient ">
                        <a href="tag-<?= $tag->id ?>.html" class="text-decoration-none text-white">
                            <?= $tag->name ?>
                        </a>
                    </span>
                <?php endforeach ?>
            </div>
            <small class="badge bg-info bg-gradient">Publié le <?= $post->getCreatedAt() ?></small>
            <p><?= $post->getExcerpt() ?></p>
            <?= $post->getButton() ?>
        </div>
    </div>

<?php endforeach ?>
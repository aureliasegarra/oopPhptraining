<h2 class="mx-3 my-3">Liste de articles</h2>
<?php foreach ($params['posts'] as $post) : ?>
    <div class="card mb-3">
        <div class="card-body">
            <h2><?= $post->title ?></h2>
            <small><?= $post->created_at ?></small>
            <p class="mt-3"><?= $post->content ?></p>
            <a href="/post/<?= $post->id ?>" class="btn btn-primary">Lire plus</a>
        </div>
    </div>
<?php endforeach ?>
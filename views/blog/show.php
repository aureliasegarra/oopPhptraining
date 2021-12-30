<h2><?= $params['post']->title ?></h2>
<div>
                <?php foreach ($params['post']->getTags() as $tag): ?>
                    <span class="badge bg-secondary"><?= $tag->name ?></span>
                <?php endforeach ?>
                
            </div>
<p><?= $params['post']->content ?></p>
<a href="/posts" class="btn btn-secondary">Retourner à la liste d'articles</a>
<?php foreach (page('work')->children()->listed() as $medium): ?>

<section class="card <?= $medium->row() ?> <?= $medium->reverse() ?>">

    <a class="box <?= $medium->boxstyle() ?> one"
        href="<?= $medium->url() ?>">
        <h3><span class="arrow left">&larr;</span> <?= $medium->title() ?> <span class="arrow right">&rarr;</span></h3>
    </a>

    <?php if($image = $medium->cover()->toFile()): ?>
                <img class="two"
                    src="<?= $image->url() ?>"
                    alt="<?= $site->url() . $page->id() .'/' . $medium->cover() . '.txt' ?>" />
    <?php endif ?>

</section>

<?php endforeach ?>
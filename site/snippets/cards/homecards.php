<?php if($page->isHomePage()): ?>
    <?php foreach (page('work')->children()->listed() as $medium): ?>
        <section class="card <?= $medium->row() ?> <?= $medium->reverse() ?>">

            <a class="box <?= $medium->boxstyle() ?> one"
                href="<?= $medium->url() ?>">
                <h3><span class="arrow left">&larr;</span> <?= $medium->title() ?> <span class="arrow right">&rarr;</span></h3>
            </a>

            <?php if($image = $medium->cover()->toFile()): ?>
                        <img class="two"
                            src="<?= $image->url() ?>"
                            alt="<?= $image->alt() ?>" />
            <?php endif ?>

        </section>

    <?php endforeach ?>
<?php else: ?>
    <?php foreach ($page->children()->listed() as $style): ?>
        <section class="card <?= $style->row() ?> <?= $style->reverse() ?>">

            <a class="box <?= $style->boxstyle() ?> one"
                href="<?= $style->url() ?>">
                <h3><span class="arrow left">&larr;</span> <?= $style->title() ?> <span class="arrow right">&rarr;</span></h3>
            </a>

            <?php if($image = $style->cover()->toFile()): ?>
                        <img class="two"
                            src="<?= $image->url() ?>"
                            alt="<?= $image->alt() ?>" />
            <?php endif ?>

        </section>
    <?php endforeach ?>
<?php endif ?>

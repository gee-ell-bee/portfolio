<?php foreach ($page->children()->listed() as $project): ?>

    <section class="card <?= $project->row() . " " . $project->reverse() ?>">
    
        <?php if($image = $project->cover()->toFile()): ?>
                <img class="<?php e($page->cardimg('underlay'), 'one behind', 'two') ?>"
                    src="<?= $image->url() ?>"
                    alt="<?= $image->alt() ?>" />
        <?php endif ?>

        <a class="box <?php e($page->cardimg('underlay'), 'boxCover') ?> one" href="<?= $project->url() ?>">
            <h3><span class="arrow left">&larr;</span> <?= $project->title() ?> <span class="arrow right">&rarr;</span></h3>
        </a>

        <?php if($page->cardimg('underlay')) : ?>
        <div class="box <?= $project->boxstyle() ?> two">
            <?= $project->features() ?>
        </div>
        <?php endif ?>

    </section>

<?php endforeach ?>


<?php foreach ($page->children()->listed() as $project): ?>

    <section class="card <?= $project->row() ?> <?= $project->reverse() ?>">
    
        <?php if($image = $project->cover()->toFile()): ?>
                <img class="<?php if($page->cardimg('underlay')) : ?>one behind<?php else : ?>two<?php endif ?>"
                    src="<?= $image->url() ?>"
                    alt="<?= $site->url() . $page->id() .'/' . $project->cover() . '.txt' ?>" />
        <?php endif ?>

        <a class="box <?php if($page->cardimg('underlay')) : ?>boxCover<?php else : ?><?= $project->boxstyle() ?><?php endif ?> one" href="<?= $project->url() ?>">
            <h3><span class="arrow left">&larr;</span> <?= $project->title() ?> <span class="arrow right">&rarr;</span></h3>
        </a>

        <?php if($page->cardimg('underlay')) : ?>

            <div class="box <?= $project->boxstyle() ?> two">
                <?= $project->features() ?>
            </div>
            
        <?php endif ?>

    </section>

<?php endforeach ?>


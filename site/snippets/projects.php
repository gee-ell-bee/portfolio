<?php foreach ($page->children()->listed() as $project): ?>

    <section class="card <?= $project->layout() ?> <?= $project->reverse() ?>">
    
        <img class="<?php if($page->cardimg('underlay')) : ?>one behind<?php else : ?>two<?php endif ?>"
             src="<?= $project->image('projecthead.png')->url() ?>"
             alt="testing" />
    
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
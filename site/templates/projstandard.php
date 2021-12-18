<!DOCTYPE html>
<html lang="en">

<?= snippet('head') ?>

<body id="<?= $page->dataid() ?>">

<?php 

$next = $page->siblings()->listed()->next();

?>

    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <article>
                <?= snippet('titl') ?>
                <?= snippet('projinfo') ?>
                <?php foreach ($page->layout()->toLayouts() as $layout): ?>
                    <section class="grid" id="<?= $layout->id() ?>">
                        <?php foreach ($layout->columns() as $column): ?>
                        <div class="column" style="grid-column: span <?= $column->span() ?>">
                            <div class="blocks">
                            <?php foreach ($column->blocks() as $block): ?>
                            <div class="block block-type-<?= $block->type() ?>">
                                <?= $block ?>
                            </div>
                            <?php endforeach ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </section>
                <?php endforeach ?>
            
                 <!--<nav>
                <ul>
                    <li> -->
                    <a class="button lg fwd" href="<?= $next->url() ?>">
                            <?= $next->title() ?><span class="arrow">&rarr;</span>
                        </a>
                    <!--</li>

                    <li>-->
                        <a class="button" href="<?= $page->parent()->url() ?>">
                            <span class="arrow">&larr;</span>
                            Return to <?= $page->parent()->title() ?>
                        </a>
                    <!--</li>
                </ul>
            </nav>-->
            
            </article>

            <?= snippet('footer') ?>
        </main>
    </div>
</body>
</html>

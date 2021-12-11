<!DOCTYPE html>
<html lang="en">

<?= snippet('head') ?>

<body id="<?= $page->dataid() ?>">
    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <article>
                <?= snippet('titl') ?>
                <?= snippet('projinfo') ?>
                <?php foreach($page->layout()->toLayouts() as $layout): ?>
                    <section class="grid" id="<?= $layout->id() ?>">
                        <?php foreach($layout->columns() as $column): ?>
                        <div class="column" style="--span:<?= $column->span(6) ?>">
                            <div class="blocks">
                                <?= $column->blocks() ?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </section>
                <?php endforeach ?>
            
                <a class="button" href="<?= $page->parent()->url() ?>"><span class="arrow">&larr;</span> Return to <?= $page->parent()->title() ?></a>
            
            </article>

            <?= snippet('footer') ?>
        </main>
    </div>
</body>
</html>

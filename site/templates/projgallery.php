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
                <?= snippet('cards/projectception') ?>

                <a class="button" href="<?= $page->parent()->url() ?>"><span class="arrow">&larr;</span> Return to <?= $page->parent()->title() ?></a>
            </article>

            <?= snippet('footer') ?>
        </main>
    </div>
</body>

</html>

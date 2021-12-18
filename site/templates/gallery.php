<!DOCTYPE html>
<html lang="en">

<?= snippet('head') ?>

<?= snippet('variables') ?>

<?php 

$next = $page->siblings()->listed()->next();

?>

<body id="<?= $page->dataid() ?>">
    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <article>
                <?= snippet('titl') ?>

                <?php if ($page->cardimg()->isNotEmpty()): ?>
                    <?= snippet('cards/projects') ?>
                    <?php else : ?>
                        <?= snippet('cards/homecards') ?>
                <?php endif ?>

                <a class="button lg fwd" href="<?= $next->url() ?>">
                    <?= $next->title() ?> <span class="arrow">&rarr;</span>
                </a>
                <a class="button" href="<?= $site->url() ?>">
                    <span class="arrow">&larr;</span> Return to Home
                </a>
            </article>

            <?= snippet('footer') ?>
        </main>
    </div>
</body>
</html>

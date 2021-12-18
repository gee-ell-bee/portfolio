<!DOCTYPE html>
<html lang="en">

<?= snippet('head') ?>

<?= snippet('variables') ?>

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

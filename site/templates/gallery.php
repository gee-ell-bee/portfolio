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

                <?= snippet('projects') ?>

                <a class="button" href="<?= $site->url() ?>"><span class="arrow">&larr;</span> Return to Home</a>

            </article>

            <?= snippet('footer') ?>
            
        </main>
</body>

</html>

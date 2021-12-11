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
            
                <?= snippet('cards/homecards') ?>
                
            </article>

            <?= snippet('footer') ?>
        </main>
    </div>
</body>
</html>
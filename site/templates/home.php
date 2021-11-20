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
            
                <?= snippet('boxlinks') ?>
                
            </article>

            <?= snippet('footer') ?>

        </main>
        
</body>
</html>
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
            <!-- page content -->  
        <article>
            <?= snippet('titl') ?>
            <div class="text">
                <?= $page->text()->kt() ?>
            </div>
        </article>
            <?= snippet('footer') ?>
        </main>
</body>

</html>
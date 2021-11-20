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
            <h1><?= $page->title() ?></h1>
            <p><?= $page->text()->kirbytext() ?></p>
            <?= snippet('home-boxes') ?>
        </main>
    </div>
</body>
</html>
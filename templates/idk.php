<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $site->title() .': ' . $page->title(); ?></title>
    <meta name="author" content="Grey Larrain Bratt" />
    <meta name="description" content="<?= $site->description() ?>" />
    <meta name="keywords" content="<?= $site->keywords() ?>" />

    <?= css('assets/css/main.css') ?>
    <?= css('assets/css/' . $page->id() . '.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />

    <?= js('assets/js/main.js') ?>
</head>
<body id="<?= $page->id() ?>">
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

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php if($page->isHomePage()) : ?>
        <title><?= $site->title() ?></title>
        <?php else : ?>
            <title><?= $site->title() .': ' . $page->title(); ?></title>
    <?php endif ?>
    <meta name="author" content="Grey Larrain Bratt" />
    <meta name="description" content="<?= $site->description() ?>" />
    <meta name="keywords" content="<?= $site->keywords() ?>" />

    <link rel="icon" href="<?=$site->url() ?>/content/favicon.png" type="photo/png" />

    <?= css('assets/css/main/main.css') ?>
    <?= css('assets/css/main/header.css') ?>
    <?= css('assets/css/main/nav.css') ?>
    <?= css('@auto') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />

    <script defer src="<?= $site->url() ?>/assets/js/main.js"></script>

</head>

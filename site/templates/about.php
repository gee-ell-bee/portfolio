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

    <link rel="favicon" href="<?=$site->url() ?>/assets/images/favicon.jpg" type="photo/jpg" />

    <?= css('assets/css/main.css') ?>
    <?= css('assets/css/' . $page->id() . '.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />

    <script defer src="<?= $site->url() ?>/assets/js/main.js"></script>

</head>

<body id="<?= $page->id() ?>">
    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <!-- page content -->
            <h1 class="text">About Grey</h1>
            <picture class="left">
                <source srcset="images/headshot-small.png ,
                images/headshot-medium.png ,
                images/headshot-large.png " sizes="(min-width: ) ,
                (min-width: ) ,
                " />
            </picture>

                <h2>Background</h2>
                <p>
                    Grey is an artist and designer raised in the SF Bay Area. They have been learning to speak Mandarin
                    Chinese (reading and writing traditional Chinese characters) since they were five years old, and
                    considers it their first passion. Though the subject of study often changes, their love of learning
                    has remained constant.
                </p>

                <h2>Learning &amp; Skills</h2>
                <p>
                    Grey studied history at Smith College c/o 2019, focusing on power, colonialism & social change,
                    though officially concentrating in East Asian history. There they developed valuable tools in
                    critical thinking, textual & historical analysis, and communication. After undergrad, they decided
                    to pursue visual arts. They currently study studio art and web design at Diablo Valley College in
                    the Bay.
                </p>
            </div>

            <!----------------------------------- END About page content -->

            <footer>
                <div class="footName">
                    Grey Larrain Bratt
                </div>
                <div class="footInsta">
                    <a href="http://instagram.com/grey.bei" target="_blank">
                        <img class="instag" src="../images/igicon.png" alt="Link to Grey's Instagram" />
                    </a>
                </div>
            </footer>
        </main>
</body>

</html>
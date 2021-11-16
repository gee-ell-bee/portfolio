
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
    <?= css('assets/css/' . $page->dataid() . '.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />

    <script defer src="<?= $site->url() ?>/assets/js/main.js"></script>

</head>

<body id="<?= $page->dataid() ?>">
    <div id="whole">
        <!-- header -->
        <?= snippet('top') ?>
        <!-- nav -->
        <?= snippet('nav') ?>

        <main>
            <!-- #region Design Exercises page content -->
            <div class="text">
                <h1>Design Exercises</h1>
            </div>
            <div class="box left box3">
                <!-- !!!!! switch to a Button -->
                    <a href="noahfranklin.html">
                        <h3>CSS Animations &rarr;</h3>
                    </a>
                <p class="boxExpand"><?= $page('cssanimat.txt')->text() ?></p>
            </div>
            <picture class="right">
                <source class="animat"
                        srcset="<?= image('cssanimathead-small.png')->url() ?> 175w,
                        <?= image('cssanimathead-medium.png')->url() ?> 350w,
                        <?= image('cssanimathead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                       (max-width: 350px) 350px,
                       700px" />
                <img class="animat" src="<?= image('cssanimathead-medium.png')->url() ?>" alt="Flatlay of the first couple steps of an animation" />
            </picture>
            <picture class="left">
                <source srcset="<?= image('cssgridhead-small.png')->url() ?> 175w,
                            <?= image('cssgridhead-medium.png')->url() ?> 350w,
                            <?= image('cssgridhead-large.png')->url() ?> 700w" sizes="(max-width: 175px) 175px,
                            (max-width: 600px) 350px,
                            700px" />
                <img src="<?= image('cssgridhead-medium.png')->url() ?>" alt="CSS Grid layouts thumbnail" />
            </picture>
            <div class="box right box1">
                <!-- !!!!! switch to a Button -->
                <a href="designexperiments.html">
                    <h3>&larr; CSS Grids</h3>
                </a>
            </div>
            <!--<div class="image left six">
                <picture>
                    <source srcset="../images/designexp/animation-coloroverstepbystep-small.png 175w,
                                ../images/designexp-medium.png 350w,
                                ../images/designexp-large.png 700w" sizes="(max-width: 175px) 175px,
                                (max-width: 600px) 350px,
                                700px" />
                    <img src="../images/designexp-medium.png" alt="Examples of Grey's traditional art projects" />
                </picture>
            </div>
            <div class="box right box2 sev">
                <h4>
                    <a class="boxLink" href="designexercises.html"><span class="boxLinkSpan">&larr; Design Exercises</span></a>
                </h4>
            </div>-->

            <!-- <div class="text ">
                <h5>Homepage Title</h5>
                <p>Home page text goes here&mdash;what do you wanna do with this?? Is it a place for featured content,
                    additional introductory info, or what?? write some stuff when you have time.</p>
            </div> -->

            <!-- #endregion -->
            

            <?= snippet('footer') ?>
        </main>
</body>

</html>

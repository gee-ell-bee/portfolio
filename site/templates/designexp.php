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
                <img class="right animat behind two" src="<?= image('cssanimathead.png')->url() ?>" alt="Flatlay of the first couple steps of an animation" />
                <a class="box left boxCover two" href="noahfranklin.html">
                    <h3><?= $page->boxonetitle() ?> &rarr;</h3>
                </a>
                
                <div class="box boxExpand thr">
                    <?= $page->boxonetext() ?>
                </div>
                
                <img class="left behind fou" src="<?= image('cssgridhead.png')->url() ?>" alt="CSS Grid layouts thumbnail" />
                <a class="box right boxCover fou" href="designexperiments.html">
                    <h3>&larr; <?= $page->boxtwotitle() ?></h3>
                </a>
                <p class="box boxExpand fiv"><?= $page->boxtwotext() ?></p>
            </article>

            <?= snippet('footer') ?>
        </main>
</body>

</html>

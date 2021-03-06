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
                <div class="aboutTop">
                    <?php if($image = $page->portrait()->toFile()): ?>
                    <img class="left aboutImg"
                        src="<?= $image->resize(400)->url() ?>"
                        alt="<?= $image->alt() ?>" />
                    <?php endif ?>

                    <?php if($page->headerone()->isNotEmpty()) : ?>
                    <h2><?= $page->headerone() ?></h2>
                    <?php endif ?>

                    <p>
                        <?= $page->textone() ?>
                    </p>
                </div>

                <?php if($page->headertwo()->isNotEmpty()): ?>
                <h2><?= $page->headertwo() ?></h2>
                <?php endif ?>

                <?php if($page->texttwo()->isNotEmpty()): ?>
                <p>
                    <?= $page->texttwo() ?>
                </p>
                <?php endif ?>

                <a class="button fwd" href="<?= $site->url() ?>">
                    See Grey&#8217;s Work <span class="arrow">&rarr;</span>
                </a>
            </article>
            
            <?= snippet('footer') ?>
        </main>
    </div>
</body>

</html>
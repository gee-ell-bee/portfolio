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
                    <img class="left aboutImg" src="<?= $page->image()->resize(400)->url() ?>" />
                    <h2><?= $page->headerone() ?></h2>
                    <p>
                        <?= $page->textone() ?>
                    </p>
                </div>

                <h2><?= $page->headertwo() ?></h2>
                <p>
                    <?= $page->texttwo() ?>
                </p>
            </article>
            <?= snippet('footer') ?>
        </main>
</body>

</html>
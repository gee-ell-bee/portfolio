
<footer class="las">
    <div class="footName">
        <?= $site->title() ?>
    </div>
    <div class="footInsta">
        <a href="http://instagram.com/<?= $site->instagram() ?>"
            target="_blank">
            <img class="instag"
                src="<?= $site->image('instabw.png')->url() ?>"
                alt="Link to Grey's Instagram" />
        </a>
    </div>
</footer>
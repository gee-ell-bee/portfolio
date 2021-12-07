<?php foreach ($page->children()->listed() as $card): ?>

<section class="card <?= $card->row() ?> <?= $card->reverse() ?>">

    <div class="box <?= $card->boxstyle() ?> one">
        <a class="box expander">
            <h3><?= $card->title() ?> <span class="carrot"></span></h3>
        </a>

        <div class="descContain">
            <ul class="desc">
                <?php if ($card->role()->isNotEmpty()): ?>
                <li>
                    <span class="label">Role</span>
                    <?= $card->role() ?>
                </li>
                <?php endif ?>
                <?php if ($card->duration()->isNotEmpty()): ?>
                <li>
                    <span class="label">Duration</span>
                    <?= $card->duration() ?>
                </li>
                <?php endif ?>
                <?php if ($card->tools()->isNotEmpty()): ?>
                <li>
                    <span class="label">Tools</span>
                    <?= $card->tools() ?>
                </li>
                <?php endif ?>
                <?php if ($card->features()->isNotEmpty()): ?>
                <li>
                    <span class="label">Features</span>
                    <?= $card->features() ?>
                </li>
                <?php endif ?>
                <?php if ($card->overview()->insNotEmpty()): ?>
                <li>
                    <?= $card->overview() ?>
                </li>
                <?php endif ?>
                <?php if ($card->link()->isNotEmpty()): ?>
                <li>
                    <a class="label"
                        target="_blank"
                        href="<?= $card->link() ?>">Live preview &rarr;</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>

    <?php if($image = $card->cover()->toFile()): ?>
                <img class="two <?= $image->class() ?>"
                    src="<?= $image->url() ?>"
                    alt="<?= $site->url() . $page->id() .'/' . $card->cover() . '.txt' ?>" />
        <?php endif ?>

</section>

<?php endforeach ?>
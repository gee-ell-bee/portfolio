<?php foreach (page('work')->children()->listed() as $medium): ?>

<section class="card <?= $medium->row() ?> <?= $medium->reverse() ?>">

    <a class="box <?= $medium->boxstyle() ?> one"
        href="<?= $medium->url() ?>">
        <h3><span class="arrow left">&larr;</span> <?= $medium->title() ?> <span class="arrow right">&rarr;</span></h3>
    </a>

    <!-- this bit here is for the field: -->
    <?php if($image = $medium->cover()->toFile()): ?>
        <!-- this if statement itself makes $image into a variable that means
            "$medium->cover()->toFile()";
        $medium is the page i want it to draw from
        cover() is the .txt file field
        and toFile() is a "helper" that makes the text in the cover() field
            into a file -->
                <img class="two"
                    src="<?= $image->url() ?>"
                    alt="<?= $image->alt() ?>" /> <!-- pulls the alt text from "the image.jpg".txt -->
    <?php endif ?>
    <!-- end of the field bit -->

</section>

<?php endforeach ?>
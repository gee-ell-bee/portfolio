<?php foreach (page('work')->children()->listed() as $medium): ?>

<section class="card <?= $medium->layout() ?> <?= $medium->reverse() ?>">


    <a class="box <?= $medium->boxstyle() ?> one"
        href="<?= $medium->url() ?>">
        <h3><span class="arrow left">&larr;</span> <?= $medium->title() ?> <span class="arrow right">&rarr;</span></h3>
    </a>

    
    <img class="two"
         src="<?= $medium->image('head.png')->url() ?>"
         alt="<? $medium->image('head.png')->alt() ?>" />


</section>

<?php endforeach ?>
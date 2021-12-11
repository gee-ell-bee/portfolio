<!-- SAME FIELDS IN snippets>cards>projectception.php
    IF CHANGING HERE, MAKE SURE TO CHANGE THERE AS WELL -->
<ul class="projtop">
    <?php if ($page->role()->isNotEmpty()): ?>
    <li>
        <span class="label">Role</span>
        <?= $page->role() ?>
    </li>
    <?php endif ?>
    <?php if ($page->duration()->isNotEmpty()): ?>
    <li>
        <span class="label">Duration</span>
        <?= $page->duration() ?>
    </li>
    <?php endif ?>
    <?php if ($page->tools()->isNotEmpty()): ?>
    <li>
        <span class="label">Tools</span>
        <?= $page->tools() ?>
    </li>
    <?php endif ?>
    <?php if ($page->features()->isNotEmpty()): ?>
    <li>
        <span class="label">Features</span>
        <?= $page->features() ?>
    </li>
    <?php endif ?>
    <?php if ($page->overview()->insNotEmpty()): ?>
    <li>
        <?= $page->overview() ?>
    </li>
    <?php endif ?>
    <?php if ($page->link()->isNotEmpty()): ?>
    <li>
        <a class="label"
            target="_blank"
            href="<?= $page->link() ?>">Live preview &rarr;</a>
    </li>
    <?php endif ?>
</ul>
<picture> <!-- add segment to determine class left or right -->
                <source srcset="<?= $page->image()->url() ?> 175w,
                <?= $page->image()->url() ?> 350w,
                <?= $page->image()->url() ?> 700w" sizes="(max-width: 175px) 175px,
                    (max-width: 350px) 350px,
                    700px" />
                <img src="<?= image('webdeshead-medium.png')->url() ?>" alt="<?= image()->alt() ?>" />
            </picture>

    <!-- fields: image name, size (sm, med, lg), .png -->
    <!-- what file should alt text be in???? how to designate name of field????? -->
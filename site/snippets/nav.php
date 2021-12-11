
        <nav>
            <ul>
                <li>
                    <a href="<?= $site->url() ?>"><?= page('home')->title()->lower() ?></a>
                </li>
                <li>
                    <a href="<?= url('about') ?>"><?= page('about')->title()->lower() ?></a>
                </li>
                <li>
                    <span class="carrot"></span>
                    <a id="myBtn" class="dropbtn">work</a>
                    <ul id="navDropdown" class="hide">
                        <?php foreach (page('work')->children()->listed() as $medium): ?>
                        <li>
                            <a href="<?= $medium->url() ?>"><?= $medium->title()->lower() ?></a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li>
                    <a href="<?= url('contact') ?>"><?= page('contact')->title()->lower() ?></a>
                </li>
            </ul>
        </nav>
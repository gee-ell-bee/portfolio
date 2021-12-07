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
                <form action="mailto:<?= $page->email() ?>">
                    <fieldset class="name">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Grey Bratt" required />
                        <span></span>
                    </fieldset>

                    <fieldset class="email">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" minlength="5" placeholder="name@website.com" autocomplete="on" required />
                        <span></span>
                    </fieldset>

                    <fieldset class="msg">
                        <label for="msg">Message</label>
                        <textarea id="msg" name="message" placeholder="<?= $page->message() ?>" required></textarea>
                    </fieldset>

                    <input class="submit" type="submit" value="Send to Grey" />
                </form>
            <?= snippet('footer') ?>
        </main>
</body>

</html>
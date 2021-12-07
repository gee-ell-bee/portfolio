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
                <form action="">
                    <fieldset class="name">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Grey Bratt" required />
                        <span></span>
                    </fieldset>
                    
                    <fieldset class="org">
                        <label for="org">Organization</label>
                        <input type="text" id="org" name="organiz" />
                        <span></span>
                    </fieldset>

                    <fieldset class="email">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" minlength="5" placeholder="name@website.com" autocomplete="on" required />
                        <span></span>
                    </fieldset>

                    <fieldset class="phone">
                        <label for="phone">Phone <span class="tellab">if in the United States</span></label>
                        <input type="tel" id="phone" name="phone" minlength="10" maxlength="14" size="12" autocomplete="tel-national" placeholder="123-456-7890" />
                        <span></span>
                    </fieldset>

                    <fieldset class="method radio">
                        <legend>Best way to contact</legend>
                        
                        <input type="radio" id="prefEmail" name="method" value="preferEmail" />
                        <label for="prefEmail">Email</label>

                        <input type="radio" id="prefPhone" name="method" value="preferPhone" />
                        <label for="prefPhone">Phone</label>
                    </fieldset>

                    <fieldset class="msg">
                        <label for="msg">Message</label>
                        <textarea id="msg" name="message" placeholder="Nice to meet you!" required></textarea>
                    </fieldset>

                    <input class="submit" type="submit" value="Send to Grey" />
                </form>
            <?= snippet('footer') ?>
        </main>
</body>

</html>
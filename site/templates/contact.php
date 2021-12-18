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

        <form method="post" action="<?= $page->url() ?>">
          <div class="hony">
            <fieldset class="website">
              <label for="website">Website <abbr title="required">*</abbr></label>
              <input type="url" id="website" name="website" tabindex="-1">
            </fieldset>
          </div>
          
          <fieldset class="name">
            <label for="name">Name</label>
            <input type="text"
              id="name"
              name="name"
              value="<?= esc($data['name'] ?? '', 'attr') ?>"
              placeholder="Grey Bratt"
              required />
              <?php if($success): ?>
                <?php else: ?>
                <?php if (isset($alert['error'])): ?>
                  <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
                <?php endif ?>
              <?php endif ?>
            <span></span>
          </fieldset>

          

          <fieldset class="email">
            <label for="email">Email</label>
            <input type="email"
              id="email"
              name="email"
              placeholder="name@website.com"
              autocomplete="on"
              value="<?= esc($data['email'] ?? '', 'attr') ?>"
              required />
              <?php if($success): ?>
                <?php else: ?>
                <?php if (isset($alert['error'])): ?>
                  <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                <?php endif ?>
              <?php endif ?>
            <span></span>
          </fieldset>

          <fieldset class="msg">
              <label for="msg">Message</label>
              <textarea id="msg"
                name="message"
                placeholder="<?= $page->message() ?>"
                required>
                  <?= esc($data['text'] ?? '') ?>
              </textarea>
              <?php if($success): ?>
                <?php else: ?>
                <?php if (isset($alert['error'])): ?>
                  <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
                <?php endif ?>
              <?php endif ?>
          </fieldset>

          <input class="submit"
            type="submit"
            value="Send to Grey" />
        </form>

        <?php if($success): ?>
          <div class="alert success">
            <p>
              <?= $success ?>
            </p>
          </div>
          <?php else: ?>
          <?php if (isset($alert['error'])): ?>
            <div>
              <?= $alert['error'] ?>
            </div>
          <?php endif ?>
        <?php endif ?>

        <?= snippet('footer') ?>
      </article>
    </main>
  </div>
</body>

</html>
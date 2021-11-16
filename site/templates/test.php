<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= css('assets/css/main.css') ?>
    <?= css('assets/css/home.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/hwm5vyl.css" type="text/css" />
</head>
<body>
    <main>
        <h1><?= page('work/webdes')->boxname() ?></h1>
        <?= snippet('home-boxes') ?>
    </main>
</body>
</html>
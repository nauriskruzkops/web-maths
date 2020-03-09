<?php

use Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper;
use Symfony\Bundle\FrameworkBundle\Templating\PhpEngine;

/**
 * @var GlobalVariables $app
 * @var PhpEngine $view
 * @var AssetsHelper $view['assets']
 */
$assetVersion = '?'.substr(md5(date('YmdH')+2), 12); // Temp!

?><!doctype html>
<html lang="<?= $app->getRequest()->getLocale()?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php $view['slots']->output('headTitle', '') ?></title>
    <meta name="description" content="<?php $view['slots']->output('headDescription', '') ?>">
    <meta name="google-site-verification" content="s1b0zvVKrDdcLnftJ6NDDaP1pHgIEvP-bt4tclpmMok" />
    <link rel="icon" href="data:image/ico;base64,0">
    <link href="<?= $view['assets']->getUrl('assets/app.css').$assetVersion ?>" rel="stylesheet">
    <link href="<?= $view['assets']->getUrl('assets/style.css').$assetVersion ?>" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body style="height: 100%">
<div class="page-wrapper" style="height: 100%">
    <?php $view['slots']->output('_content') ?>
</div>
<script src="<?= $view['assets']->getUrl('assets/runtime.js').$assetVersion ?>"></script>
<script src="<?= $view['assets']->getUrl('assets/app.js').$assetVersion ?>"></script>
<script src="<?= $view['assets']->getUrl('assets/loader.js').$assetVersion ?>"></script>
<script type="application/javascript">
    loadModule('Layout', (module) => {
        new module.default();
    });
    loadModule('Maths', (module) => {
        new module.default();
    });
</script>
</body>
</html>

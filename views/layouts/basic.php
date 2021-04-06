<?php
use app\assets\AppAsset;
use \yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Document</title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"><?= Html::a("Главная", '/web/') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= Html::a("Статьи", ['post/index']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= Html::a("Статья", ['post/show']) ?></a>
                    </li>
                </ul>
                <?= $content ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>


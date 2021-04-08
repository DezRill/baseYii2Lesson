<?php
use app\assets\AppAsset;
use \yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"><?= Html::a("Главная", '/') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= Html::a("Статьи", ['post/index']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= Html::a("Статья", ['post/show']) ?></a>
                    </li>
                </ul>

                <?php if (isset($this->blocks['block1'])): ?>
                    <?php echo $this->blocks['block1'] ?>
                <?php endif; ?>

                <?= $content ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>


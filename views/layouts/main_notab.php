<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }
    dmstr\web\AdminLteAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

            <?= $this->render(
                'content.php',
                ['content' => $content, 'directoryAsset' => $directoryAsset]
            ) ?>
    </div>
    <?php $this->endBody() ?>

    <?php $this->endPage() ?>

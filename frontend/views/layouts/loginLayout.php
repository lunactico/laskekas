<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\LoginAsset;
use common\widgets\Alert;

LoginAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="account">
<?php $this->beginBody() ?>
		<div class="container">
            <div class="row">
                <div class="account-col text-center">

					<?= $content ?>
					
					</div>
					</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
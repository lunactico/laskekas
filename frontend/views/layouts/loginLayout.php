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
    <meta name="viewport" content="width=device-width, initial-scale=">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="account" 
	style = " width: 100%; height: 100%; opacity: 1; visibility: inherit; background-image: url(/laskekas/images/background-login.jpg); background-color: rgba(0, 0, 0, 0); background-size: cover; background-position: 0% 0%; background-repeat: no-repeat;">
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
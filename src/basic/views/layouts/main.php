<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!--FONT AWESOME 5-->
    <script src="https://kit.fontawesome.com/b458f559f0.js" crossorigin="anonymous"></script>


    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .btn-pjs {
            width: 90%;
            margin: 25px;
            padding: 40px;
        }

        .radio-custom input[type="radio"] {
            display: none;
        }

        .radio-custom label {
            display: inline-block;
            text-align: center;
            background-color: #ddd;
            padding: 4px 11px;
            font-family: Arial;
            font-size: 16px;
            cursor: pointer;
        }

        .radio-custom input[type="radio"]:checked+label {
            background-color: #bbb;
        }

        .input-stats-modalpj {
            width: 75px;
            height: 75px;
            font-size: xx-large;
            text-align: center;
        }

        .input-mod-modalpj {
            width: 75px;
            height: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => '',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Jugador', 'url' => ['/personaje/modulopj']],
                ['label' => 'Equipo', 'url' => ['/personaje/equipo']],
                Yii::$app->user->isGuest ? (['label' => 'Registro', 'url' => ['/usuario/create']]) : '',
                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>')
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'itemTemplate' => "\n\t<li class=\"breadcrumb-item\"><i>{link}</i></li>\n", // template for all links
                'activeItemTemplate' => "\t<li class=\"breadcrumb-item active\">{link}</li>\n", // template for the active link
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

    <!-- <footer class="footer">
        <div class="container">
            <p>Dungeon and Dragons Helper by Fidel y Andrés</p>
        </div>
    </footer> -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
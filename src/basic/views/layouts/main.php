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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">


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

        .texto-secundario{
            font-family: 'Caveat Brush', cursive;
            font-size: x-large;
        }        
        .radio-custom input[type="radio"] {
            display: none;
        }

        .radio-custom label {
            display: inline-block;
            text-align: center;
            background-color: #780623;
            padding: 4px 11px;
            font-size: 16px;
            cursor: pointer;
            color: white;

            border-radius: 3px;
        }

        .radio-custom input[type="radio"]:checked+label {
            background-color: #70053D;
            border: 2px solid #212529;
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

        .btn-pj:hover{
            color: #fff;
            background-color: #780623;
            border-color: #780623;
        }

        .btn-dm:hover{
            color: #fff;
            background-color: #184D00;
            border-color: #184D00;
        }

        
        .nav-link {
            color: #212529;
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #70053D;
            border: 2px solid #212529;
        }

        .nav-link:hover {
            color: #fff;
            background-color: #780623;
            border-color: #780623;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logotipo-reduccion-min.png', ['alt'=>Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => '',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav texto-secundario'],
            'items' => [
                ['label' => 'Inicio', 'url' => ['/site/index']],
                Yii::$app->user->isGuest ? (['label' => 'Registro', 'url' => ['/usuario/create']]) : '',
                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        '<i style="font-size:larger;" class="fas fa-sign-out-alt">'. Yii::$app->user->identity->username .'</i>',
                        ['class' => 'btn']
                    )
                    . Html::endForm()
                    . '</li>')
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container texto-secundario">
            <?= Breadcrumbs::widget([
                'itemTemplate' => "\n\t<li class=\"breadcrumb-item\"><i>{link}</i></li>\n", // template for all links
                'activeItemTemplate' => "\t<li class=\"breadcrumb-item active\">{link}</li>\n", // template for the active link
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <div class="mt-3">
                <?= $content ?>
            </div>
        </div>
    </div>

    <!-- <footer class="footer">
        <div class="container">
            <p>Dungeon and Dragons Helper by Fidel y Andrés</p>
        </div>
    </footer> -->

    <?php $this->endBody() ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    
    <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>

</body>

</html>
<?php $this->endPage() ?>
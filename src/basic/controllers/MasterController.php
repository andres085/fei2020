<?php

namespace app\controllers;

use app\models\Diariocampania;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class MasterController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCampania()
    {
        return $this->render('campania');
    }

    public function actionCreadorcampania()
    {
        return $this->render('creadorcampania');
    }

    public function actionHojacampania()
    {
        $model = new Diariocampania();
        return $this->render('hojacampania', [
            'model' => $model,
        ]);
    }
}

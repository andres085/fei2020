<?php

namespace app\modules\apiv1\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `apiv1` module
 */
class DiariocampaniaController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Diariocampania';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        $searchModel = new \app\modules\apiv1\models\DiariocampaniaSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}

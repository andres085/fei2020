<?php

namespace app\modules\apiv1\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `apiv1` module
 */
class DiarioController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Diario';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        $searchModel = new \app\modules\apiv1\models\DiarioSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}

<?php

namespace app\controllers;

class PersonajeController extends \yii\web\Controller
{
    public function actionCreadorpj1()
    {
        return $this->render('creadorpj1');
    }

    public function actionCreadorpj2()
    {
        return $this->render('creadorpj2');
    }

    public function actionModulopj()
    {
        return $this->render('modulopj');
    }

    public function actionHojapj()
    {
        return $this->render('hojapj');
    }

    public function actionTrasfondo()
    {
        return $this->render('trasfondo');
    }
}

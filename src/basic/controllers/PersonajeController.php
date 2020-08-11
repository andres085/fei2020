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

    public function actionDiariopj()
    {
        return $this->render('diariopj');
    }

    public function actionModulopj()
    {
        return $this->render('modulopj');
    }
}

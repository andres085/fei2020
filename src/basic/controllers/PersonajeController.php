<?php
namespace app\controllers;
use app\models\Diario;

class PersonajeController extends \yii\web\Controller
{
    public function actionCreadorpj1()
    {
        return $this->render('creadorpj1');
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

    public function actionDiario()
    {
        $model = new Diario();
         return $this->render('diariopj', [
            'model' => $model,
        ]);
    }
}

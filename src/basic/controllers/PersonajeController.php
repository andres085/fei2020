<?php
namespace app\controllers;
use app\models\Diario;
use app\models\Personaje;
use app\models\Objeto;

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
        $model = new Personaje();
        return $this->render('hojapj', ['model' => $model]);
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

    public function actionEquipo()
    {
        $model = new Objeto();
        return $this->render('equipo', ['model' => $model]);
    }
}

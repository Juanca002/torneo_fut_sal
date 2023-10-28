<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Equipos;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Jugadores $model */

$equipo = Equipos::findOne($model->id_equipo); // Buscamos el equipo al que pertenece el jugador

$this->title = "Jugador: " . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Jugadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jugadores-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Actualizar datos del Jugador', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Dar de Baja del Jugador', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que deseas eliminar este jugador?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'apellido',
            'fecha_nacimiento',
            [
                'attribute' => 'id_equipo',
                'label' => 'Equipo',
                'value' => $equipo ? $equipo->nombre : '',
            ],
            'fotografia',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ver Equipo', ['equipos/view', 'id' => $model->id_equipo], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Regresar a Registro de Jugadores', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
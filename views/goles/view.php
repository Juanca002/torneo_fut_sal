<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Jugadores;
/** @var yii\web\View $this */
/** @var app\models\Goles $model */

$jugador = Jugadores::findOne($model->id_jugadores);
$this->title = 'Registro de Goles de: ' . $jugador->nombre . ' en la Jornada ' . $model->jornada;
$this->params['breadcrumbs'][] = ['label' => 'Goles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="goles-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Actualizar registro', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Dar de baja registro', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que deseas eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Regresar a Tabla de Goleo', ['index'], ['class' => 'btn btn-secondary']) ?>
        <?= Html::a('Ver Jugador', ['jugadores/view', 'id' => $model->id_jugadores], ['class' => 'btn btn-info']) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'id_jugadores',
                'label' => 'Nombre del Goleador',
                'value' => $jugador->nombre,
            ],
            'jornada',
            'cantidad_goles',
        ],
    ]) ?>
</div>

<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Incidencias $model */

$this->title = "Amonestaciones del Jugador: " . $model->jugadores->nombre; // Modificar el título
$this->params['breadcrumbs'][] = ['label' => 'Incidencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>

<div class="incidencias-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Actualizar Amonestaciones del Jugador', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar Amonestaciones del Jugador', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Ver Jugador', ['jugadores/view', 'id' => $model->id_jugadores], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Ver Tabla de Amonestaciones', ['incidencias/index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'descripcion:ntext',
            'tipo_tarjeta',
            'fecha_incidencia',
            'fecha_suspension',
            [
                'label' => 'Nombre del Jugador', // Cambiar etiqueta
                'value' => $model->jugadores->nombre, // Mostrar el nombre del jugador
            ],
        ],
    ]) ?>
</div>
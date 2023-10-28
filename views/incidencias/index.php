<?php
use app\models\Incidencias;
use app\models\Jugadores;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
/** @var yii\web\View $this */
/** @var app\models\IncidenciasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Registro de Incidencias - Amonestaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incidencias-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Registrar Amonestaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'descripcion:ntext',
            'tipo_tarjeta',
            'fecha_incidencia',
            'fecha_suspension',
            [
                'attribute' => 'id_jugadores',
                'label' => 'Nombre del Jugador',
                'value' => function ($model) {
                    $jugador = Jugadores::findOne($model->id_jugadores);
                    return $jugador->nombre;
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Incidencias $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
            ],
        ],
    ]);
    ?>
</div>
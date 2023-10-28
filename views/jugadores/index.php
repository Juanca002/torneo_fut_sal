<?php
use app\models\Jugadores;
use app\models\Equipos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
/** @var yii\web\View $this */
/** @var app\models\JugadoresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Registro de Jugadores del Torneo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jugadores-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Agregar Nuevo Jugador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],
            [
                'attribute' => 'nombre',
                'label' => 'Nombre',
            ],
            'apellido',
            'fecha_nacimiento',
            [
                'attribute' => 'id_equipo',
                'label' => 'Nombre del Equipo',
                'value' => function ($model) {
                    $equipo = Equipos::findOne($model->id_equipo);
                    return $equipo ? $equipo->nombre : '';
                },
            ],
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update} {delete}',
                'urlCreator' => function ($action, Jugadores $model, $key, $index) {
                    return Url::to([$action, 'id' => $model->id]);
                },
            ],
        ],
    ]); ?>
</div>
<?php
use app\models\Equipos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var yii\web\View $this */
/* @var app\models\EquiposSearch $searchModel */
/* @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Equipos Registrados';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="equipos-index">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Registrar Equipo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // Ocultar el campo 'id' en la vista
            //'id',
            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Equipos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
</div>

<?php
use app\models\Goles;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Jugadores; // Importar el modelo Jugadores
/** @var yii\web\View $this */
/** @var app\models\GolesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Tabla de Goleo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goles-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Registrar Goles de la Jornada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_jugadores',
                'value' => function ($model) {
                    return Jugadores::findOne($model->id_jugadores)->nombre; // Obtener el nombre del jugador en base al ID
                },
                'filter' => Html::activeDropDownList($searchModel, 'id_jugadores', 
                    \yii\helpers\ArrayHelper::map(Jugadores::find()->all(), 'id', 'nombre'),
                    ['class' => 'form-control', 'prompt' => 'Seleccionar Jugador']
                ),
            ],
            'jornada',
            'cantidad_goles',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Goles $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>

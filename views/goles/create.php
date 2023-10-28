<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var app\models\Goles $model */
$this->title = 'Registrar Goles de Jugador por Jornada';
$this->params['breadcrumbs'][] = ['label' => 'Goles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goles-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
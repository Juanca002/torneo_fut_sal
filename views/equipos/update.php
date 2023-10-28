<?php
use yii\helpers\Html;
use app\models\Equipos;
/** @var yii\web\View $this */
/** @var app\models\Equipos $model */
$this->title = 'Actualización de Datos del Equipo: ' . $model->nombre; // Cambiamos el título
$this->params['breadcrumbs'][] = ['label' => 'Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equipos-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <?= Html::a('Cancelar', ['view', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
</div>

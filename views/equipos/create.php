<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var app\models\Equipos $model */
$this->title = 'Registro de Nuevo Equipo';
$this->params['breadcrumbs'][] = ['label' => 'Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipos-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', ['model' => $model, ]) ?>
    <!-- Agregar botón de Cancelar Registro -->
    <?= Html::a('Cancelar Registro', ['index'], ['class' => 'btn btn-danger']) ?>
</div>

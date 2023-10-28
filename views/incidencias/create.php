<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Jugadores;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper; // Agrega esta línea

/** @var yii\web\View $this */
/** @var app\models\Incidencias $model */
$this->title = 'Registrar Amonestaciones de Jugador';
$this->params['breadcrumbs'][] = ['label' => 'Incidencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

// Obtén la lista de jugadores registrados
$jugadores = ArrayHelper::map(Jugadores::find()->all(), 'id', 'nombre'); // Reemplaza 'id' y 'nombre' con los atributos correspondientes de tu modelo Jugadores
?>
<div class="incidencias-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 5, 'style' => 'resize: vertical;'])->label('Descripción') ?>

    <?= $form->field($model, 'fecha_incidencia')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'fecha_suspension')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'id_jugadores')->dropDownList($jugadores, ['prompt' => 'Selecciona un jugador'])->label('Nombre del Jugador') ?>

    <?= Html::a('Cancelar Registro de Amonestación', ['index'], ['class' => 'btn btn-danger']) ?>
    <?= Html::submitButton('Registrar Amonestación', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Incidencias $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="incidencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipo_tarjeta')->dropDownList([ 'roja' => 'Roja', 'amarilla' => 'Amarilla', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fecha_incidencia')->textInput() ?>

    <?= $form->field($model, 'fecha_suspension')->textInput() ?>

    <?= $form->field($model, 'id_jugadores')->textInput()->label('Nombre del Jugador')->hint('Ingresa el nombre del jugador y elige uno existente.') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

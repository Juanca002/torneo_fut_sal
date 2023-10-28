<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Goles $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="goles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreJugador')->textInput(['id' => 'nombre-jugador']) ?>
    <?= $form->field($model, 'id_jugadores')->hiddenInput(['id' => 'id-jugador'])->label(false) ?>


    <?= $form->field($model, 'jornada')->textInput() ?>

    <?= $form->field($model, 'cantidad_goles')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar registro', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancelar Registro', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
// Agregar el widget de autocompletar y script jQuery aquí
$script = <<< JS
$(function() {
    $('#nombre-jugador').autocomplete({
        source: 'url_para_buscar_jugadores', // Reemplaza 'url_para_buscar_jugadores' con la URL de tu controlador
        select: function(event, ui) {
            // Cuando se selecciona un jugador, establecer el ID del jugador en el campo oculto
            $('#id-jugador').val(ui.item.id);
        }
    });
});
JS;
$this->registerJs($script);
?>

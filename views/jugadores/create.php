<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Equipos;
/** @var yii\web\View $this */
/** @var app\models\Jugadores $model */
$this->title = 'Registrar Nuevo Jugador';
$this->params['breadcrumbs'][] = ['label' => 'Jugadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jugadores-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'id_equipo')->dropDownList(
        ArrayHelper::map(Equipos::find()->all(), 'id', 'nombre'),
        ['prompt' => 'Seleccione un equipo']
    ) ?>

    <?= Html::a('Cancelar Registro', ['index'], ['class' => 'btn btn-danger']) ?>
    <?= Html::submitButton('Agregar Jugador', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>
</div>
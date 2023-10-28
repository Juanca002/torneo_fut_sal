<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/** @var yii\web\View $this */
/** @var app\models\Equipos $model */
$this->title = $model->nombre; // Usamos el nombre del equipo como título
$this->params['breadcrumbs'][] = ['label' => 'Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="equipos-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Regresar a Equipos Registrados', ['equipos/index'], ['class' => 'btn btn-info']) ?>
    </p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $model->id ?></td>
                <td><?= $model->nombre ?></td>
                <td>
                    <?= Html::a('Actualizar Equipo', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Dar de Baja', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => '¿Estás seguro de que deseas dar de baja a este equipo?',
                            'method' => 'post',
                        ],
                    ]) ?>
                    <?= Html::a('Ver Jugadores Registrados', ['jugadores/index', 'equipo_id' => $model->id], ['class' => 'btn btn-success']) ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
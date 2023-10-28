<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incidencias".
 *
 * @property int $id
 * @property string $descripcion
 * @property string $tipo_tarjeta
 * @property string $fecha_incidencia
 * @property string|null $fecha_suspension
 * @property int $id_jugadores
 */
class Incidencias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incidencias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'tipo_tarjeta', 'fecha_incidencia', 'id_jugadores'], 'required'],
            [['descripcion', 'tipo_tarjeta'], 'string'],
            [['fecha_incidencia', 'fecha_suspension'], 'safe'],
            [['id_jugadores'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
            'tipo_tarjeta' => 'Tipo Tarjeta',
            'fecha_incidencia' => 'Fecha Incidencia',
            'fecha_suspension' => 'Fecha Suspension',
            'id_jugadores' => 'Id Jugadores',
        ];
    }
    public function getJugadores()
    {
        return $this->hasOne(Jugadores::class, ['id' => 'id_jugadores']);
    }
}
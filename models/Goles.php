<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goles".
 *
 * @property int $id
 * @property int $id_jugadores
 * @property int $jornada
 * @property int $cantidad_goles
 */
class Goles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $nombreJugador;
    public static function tableName()
    {
        return 'goles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jugadores', 'jornada', 'cantidad_goles'], 'required'],
            [['id_jugadores', 'jornada', 'cantidad_goles'], 'integer'],
            [['cantidad_goles'], 'integer', 'min' => 0],[['jornada'], 'integer', 'min' => 0]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jugadores' => 'Id Jugadores',
            'jornada' => 'Jornada',
            'cantidad_goles' => 'Cantidad Goles',
        ];
    }
}

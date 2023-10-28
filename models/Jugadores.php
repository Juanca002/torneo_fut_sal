<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jugadores".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_nacimiento
 * @property int $id_equipo
 * @property string|null $fotografia
 */
class Jugadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jugadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'fecha_nacimiento', 'id_equipo'], 'required'],
            [['fecha_nacimiento'], 'safe'],
            [['id_equipo'], 'integer'],
            [['nombre', 'apellido', 'fotografia'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'id_equipo' => 'Id Equipo',
            'fotografia' => 'Fotografia',
        ];
    }
}

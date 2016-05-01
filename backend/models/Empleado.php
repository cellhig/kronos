<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property integer $id
 * @property string $telefono_movil
 * @property string $estado
 * @property integer $persona_id
 * @property integer $cargo_id
 * @property integer $sede_id
 *
 * @property Cargo $cargo
 * @property Persona $persona
 * @property Sede $sede
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'string'],
            [['persona_id', 'cargo_id', 'sede_id'], 'required'],
            [['persona_id', 'cargo_id', 'sede_id'], 'integer'],
            [['telefono_movil'], 'string', 'max' => 10],
            ['telefono_movil','match', 'pattern'=> '/^[0-9]{10}$/'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telefono_movil' => 'Teléfono Móvil',
            'estado' => 'Estado',
            'persona_id' => 'Persona ID',
            'cargo_id' => 'Cargo',
            'sede_id' => 'Sede',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargo()
    {
        return $this->hasOne(Cargo::className(), ['id' => 'cargo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona()
    {
        return $this->hasOne(Persona::className(), ['id' => 'persona_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSede()
    {
        return $this->hasOne(Sede::className(), ['id' => 'sede_id']);
    }
}

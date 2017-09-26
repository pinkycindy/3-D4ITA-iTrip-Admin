<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pulau".
 *
 * @property integer $idPulau
 * @property string $namaPulau
 *
 * @property Provinsi[] $provinsis
 */
class Pulau extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pulau';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaPulau'], 'required'],
            [['namaPulau'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPulau' => 'Id Pulau',
            'namaPulau' => 'Nama Pulau',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsis()
    {
        return $this->hasMany(Provinsi::className(), ['idPulau' => 'idPulau']);
    }
}

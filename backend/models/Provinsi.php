<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property integer $idProvinsi
 * @property string $namaProvinsi
 * @property integer $idPulau
 *
 * @property Event[] $events
 * @property Pulau $idPulau0
 * @property Wisata[] $wisatas
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namaProvinsi', 'idPulau'], 'required'],
            [['idPulau'], 'integer'],
            [['namaProvinsi'], 'string', 'max' => 50],
            [['idPulau'], 'exist', 'skipOnError' => true, 'targetClass' => Pulau::className(), 'targetAttribute' => ['idPulau' => 'idPulau']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProvinsi' => 'Id Provinsi',
            'namaProvinsi' => 'Nama Provinsi',
            'idPulau' => 'Id Pulau',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['idProvinsi' => 'idProvinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPulau0()
    {
        return $this->hasOne(Pulau::className(), ['idPulau' => 'idPulau']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWisatas()
    {
        return $this->hasMany(Wisata::className(), ['idProvinsi' => 'idProvinsi']);
    }
}

<?php

namespace backend\models;

use Yii;
use backend\models\Provinsi;

/**
 * This is the model class for table "event".
 *
 * @property integer $idEvent
 * @property integer $idProvinsi
 * @property string $namaEvent
 * @property string $tglEvent
 * @property string $deskripsiEvent
 * @property string $lokasiEvent
 *
 * @property Provinsi $idProvinsi0
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
     public function getProvinsi(){
            return $this->hasOne(Provinsi::className(),['idProvinsi' => 'idProvinsi']);

    }
    public function rules()
    {
        return [
            [['idProvinsi', 'namaEvent', 'tglEvent', 'deskripsiEvent', 'lokasiEvent'], 'required'],
            [['idProvinsi'], 'integer'],
            [['tglEvent'], 'safe'],
            [['deskripsiEvent', 'lokasiEvent'], 'string'],
            [['namaEvent'], 'string', 'max' => 50],
            [['idProvinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['idProvinsi' => 'idProvinsi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEvent' => 'Id Event',
            'idProvinsi' => 'Id Provinsi',
            'namaEvent' => 'Nama Event',
            'tglEvent' => 'Tgl Event',
            'deskripsiEvent' => 'Deskripsi Event',
            'lokasiEvent' => 'Lokasi Event',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProvinsi0()
    {
        return $this->hasOne(Provinsi::className(), ['idProvinsi' => 'idProvinsi']);
    }
}

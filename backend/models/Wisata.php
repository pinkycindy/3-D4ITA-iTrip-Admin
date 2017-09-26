<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wisata".
 *
 * @property integer $idWisata
 * @property integer $idProvinsi
 * @property string $namaWisata
 * @property string $deskripsiWisata
 * @property string $kategori
 * @property integer $biayaMasuk
 * @property string $lokasiWisata
 *
 * @property Detailplanning[] $detailplannings
 * @property Popular[] $populars
 * @property Provinsi $idProvinsi0
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProvinsi', 'namaWisata', 'deskripsiWisata', 'kategori', 'biayaMasuk', 'lokasiWisata'], 'required'],
            [['idProvinsi', 'biayaMasuk'], 'integer'],
            [['deskripsiWisata', 'lokasiWisata'], 'string'],
            [['namaWisata'], 'string', 'max' => 50],
            [['kategori'], 'string', 'max' => 15],
            [['idProvinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['idProvinsi' => 'idProvinsi']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWisata' => 'Id Wisata',
            'idProvinsi' => 'Id Provinsi',
            'namaWisata' => 'Nama Wisata',
            'deskripsiWisata' => 'Deskripsi Wisata',
            'kategori' => 'Kategori',
            'biayaMasuk' => 'Biaya Masuk',
            'lokasiWisata' => 'Lokasi Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailplannings()
    {
        return $this->hasMany(Detailplanning::className(), ['idWisata' => 'idWisata']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopulars()
    {
        return $this->hasMany(Popular::className(), ['idWisata' => 'idWisata']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProvinsi0()
    {
        return $this->hasOne(Provinsi::className(), ['idProvinsi' => 'idProvinsi']);
    }
}

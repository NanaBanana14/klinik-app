<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 */
class Wilayah extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'wilayah';
    }

    public function rules()
    {
        return [
            [['provinsi', 'kabupaten', 'kecamatan', 'desa'], 'required'],
            [['provinsi', 'kabupaten', 'kecamatan', 'desa'], 'string', 'max' => 100],
            [['rw', 'rt'], 'string', 'max' => 10],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provinsi' => 'Provinsi',
            'kabupaten' => 'Kabupaten',
            'kecamatan' => 'Kecamatan',
            'desa' => 'Desa',
            'rw' => 'RW',
            'rt' => 'RT',
        ];
    }
}

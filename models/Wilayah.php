<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id
 * @property string $provinsi
 * @property string $kabupaten
 * @property string $kecamatan
 * @property string $desa
 * @property string|null $rw
 * @property string|null $rt
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinsi', 'kabupaten', 'kecamatan', 'desa'], 'required'],
            [['provinsi', 'kabupaten', 'kecamatan', 'desa'], 'string', 'max' => 100],
            [['rw', 'rt'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

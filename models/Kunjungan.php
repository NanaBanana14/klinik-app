<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%kunjungan}}".
 *
 * @property int $id
 * @property int $user_id
 * @property int $dokter_id
 * @property int $wilayah_id
 * @property string $jenis_kunjungan
 * @property string|null $tanggal_kunjungan
 *
 * @property User $user
 * @property Dokter $dokter
 * @property Wilayah $wilayah
 */
class Kunjungan extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%kunjungan}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'dokter_id', 'wilayah_id', 'jenis_kunjungan'], 'required'],
            [['user_id', 'dokter_id', 'wilayah_id'], 'integer'],
            [['tanggal_kunjungan'], 'safe'],
            [['jenis_kunjungan'], 'string', 'max' => 255],
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getDokter()
    {
        return $this->hasOne(Dokter::class, ['id' => 'dokter_id']);
    }    

    public function getWilayah()
    {
        return $this->hasOne(Wilayah::class, ['id' => 'wilayah_id']);
    }
}

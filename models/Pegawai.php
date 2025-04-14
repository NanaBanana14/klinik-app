<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string $jabatan
 * @property string|null $alamat
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 */
class Pegawai extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pegawai}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'nama', 'jabatan'], 'required'],
            [['user_id'], 'integer'],
            [['alamat'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama', 'jabatan'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'nama' => 'Nama',
            'jabatan' => 'Jabatan',
            'alamat' => 'Alamat',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}

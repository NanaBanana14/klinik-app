<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nama
 * @property string|null $spesialis
 * @property string|null $no_hp
 * @property string|null $alamat
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property User $user
 */
class Dokter extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spesialis', 'no_hp', 'alamat'], 'default', 'value' => null],
            [['user_id', 'nama'], 'required'],
            [['user_id'], 'integer'],
            [['alamat'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama', 'spesialis'], 'string', 'max' => 255],
            [['no_hp'], 'string', 'max' => 20],
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
            'spesialis' => 'Spesialis',
            'no_hp' => 'No Hp',
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

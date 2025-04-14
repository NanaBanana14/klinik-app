<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Tindakan extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%tindakan}}';
    }

    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
            [['deskripsi'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Tindakan',
            'deskripsi' => 'Deskripsi',
        ];
    }
}

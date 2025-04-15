<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class Transaksi extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%transaksi_kunjungan}}';
    }

    public function rules()
    {
        return [
            [['kunjungan_id', 'total', 'tanggal'], 'required'],
            [['kunjungan_id'], 'integer'],
            [['total'], 'number'],
            [['tanggal'], 'datetime'],
            [['status'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kunjungan_id' => 'Kunjungan ID',
            'total' => 'Total',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
        ];
    }

    public function search($params)
    {
        $query = Transaksi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'kunjungan_id' => $this->kunjungan_id,
            'total' => $this->total,
            'tanggal' => $this->tanggal,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}

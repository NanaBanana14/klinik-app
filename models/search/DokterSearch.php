<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dokter;

/**
 * DokterSearch represents the model behind the search form about `app\models\Dokter`.
 */
class DokterSearch extends Dokter
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['nama', 'spesialis', 'no_hp', 'alamat', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Dokter::find();

        $query->joinWith('user');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }

        $query->andFilterWhere([
            'dokter.id' => $this->id,
            'dokter.user_id' => $this->user_id,
            'dokter.created_at' => $this->created_at,
            'dokter.updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'dokter.nama', $this->nama])
            ->andFilterWhere(['like', 'dokter.spesialis', $this->spesialis])
            ->andFilterWhere(['like', 'dokter.no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'dokter.alamat', $this->alamat]);

        return $dataProvider;
    }
}

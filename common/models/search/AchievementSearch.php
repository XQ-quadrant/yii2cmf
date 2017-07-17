<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Achievement as AchievementModel;

/**
 * Achievement represents the model behind the search form about `common\models\Achievement`.
 */
class AchievementSearch extends AchievementModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'level', 'cate'], 'integer'],
            [['author', 'title', 'periodical', 'year', 'address', 'serial_number', 'ei', 'hint', 'publish_at', 'create_at', 'year_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
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
        $query = AchievementModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'year' => $this->year,
            'publish_at' => $this->publish_at,
            'create_at' => $this->create_at,
            'level' => $this->level,
            'cate' => $this->cate,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'periodical', $this->periodical])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'serial_number', $this->serial_number])
            ->andFilterWhere(['like', 'ei', $this->ei])
            ->andFilterWhere(['like', 'hint', $this->hint])
            ->andFilterWhere(['like', 'year_id', $this->year_id]);

        return $dataProvider;
    }
}

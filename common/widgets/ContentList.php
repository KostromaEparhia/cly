<?php


namespace common\widgets;
use common\models\core\Content;
use yii\data\ActiveDataProvider;
use \yii\widgets\ListView;


class ContentList extends ListView
{
    var $dataProvider;

    public function init()
    {
        $this->dataProvider = new ActiveDataProvider([
            'query' => Content::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        parent::init();

    }
}

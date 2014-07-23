<?php

namespace frontend\models;

use common\models\core\Content;
use Yii;
use yii\base\Model;

/**
 * Shows Content
 */
class ShowContent extends Model
{
    public $content;

    public function load($id, $formName = NULL){
        $this->content = Content::find()->where(['id'=>$id])->one();
        return $this->content!=null;
    }

}

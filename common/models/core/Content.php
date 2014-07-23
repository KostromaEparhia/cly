<?php

namespace common\models\core;

use yii\db\ActiveRecord;

class Content extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return 'content';
    }

    public  function getText()
    {
        $out = '';
        if ($this->short_text!='') $out = $this->short_text;
        if ($this->full_text!='') $out .= $this->full_text;
        return $out;
    }

    public function getUrl()
    {
        return '/content-'.$this->id.'.html';
    }

}

?>
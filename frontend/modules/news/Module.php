<?php

namespace frontend\modules\news;

use Yii;

/**
* news module definition class
*/
class Module extends \yii\base\Module
{
    /**
    * @inheritdoc
    */
    public $controllerNamespace = 'frontend\modules\news\controllers';

    public $defaultRoute = 'news';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}

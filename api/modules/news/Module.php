<?php

namespace api\modules\news;

use Yii;

/**
* news module definition class
*/
class Module extends \yii\base\Module
{
    /**
    * @inheritdoc
    */
    public $controllerNamespace = 'api\modules\news\controllers';

    public $defaultRoute = 'news';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}

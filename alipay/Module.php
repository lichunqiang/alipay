<?php namespace light\alipay;

/**
 * The alipay Module
 *
 * @version 0.1.0
 * @author lichunqiang<light-li@hotmail.com>
 * @package light\alipay
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'light\alipay\controllers';

    /**
     * @inheritdoc
     */
    public $defaultRoute = 'test';

    /**
     * @var string The action for handle the notify_url
     */
    public $notifyAction = 'light\alipay\actions\NotifyAction';

    /**
     * @var string the action for handle the return_url
     */
    public $returnAction = 'light\alipay\actions\ReturnAction';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}

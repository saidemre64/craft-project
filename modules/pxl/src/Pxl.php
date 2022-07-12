<?php

namespace modules\pxl;

use Craft;
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use yii\base\Event;
use yii\base\Module;
use Craft\console\Application as ConsoleApplication;

class Pxl extends Module
{
    public static Pxl $instance;

    public function __construct($id, $parent = null, $config = [])
    {
        Craft::setAlias('@modules/pxl', $this->getBasePath());

        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }

    public function init()
    {
        parent::init();
        self::$instance = $this;

        if (Craft::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'modules\pxl\console\controllers';
        } else {
            $this->controllerNamespace = 'modules\pxl\controllers';
        }

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_SITE_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['api/games'] = 'pxl/boardgame/games';
            }
        );
    }
}





















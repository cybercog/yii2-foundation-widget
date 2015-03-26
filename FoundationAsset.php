<?php

/**
 * Foundation Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation;

use yii\web\AssetBundle;

class FoundationAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation-for-yii2';
    public $css = [
        'css/normalize.css',
        'css/foundation.css',
    ];
    public $js = ['js/foundation/foundation.js'];
    public $depends = ['yii\web\JqueryAsset'];

}

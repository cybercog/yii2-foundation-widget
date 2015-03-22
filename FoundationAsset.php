<?php

/**
 * Foundation Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation;

use yii\web\AssetBundle;

class FoundationAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation';
    public $css = [
        'css/normalize.css',
        'css/foundation.css',
    ];
    public $js = ['js/foundation.js'];
    public $depends = ['yii\web\JqueryAsset'];

}

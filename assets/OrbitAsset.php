<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation\assets;

use yii\web\AssetBundle;

class OrbitAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation';
    public $js = ['js/foundation/foundation.orbit.js'];
    public $depends = ['xj\foundation\FoundationAsset'];

}

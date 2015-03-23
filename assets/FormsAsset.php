<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation\assets;

use yii\web\AssetBundle;

class FormsAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation';
    public $js = ['js/foundation/foundation.forms.js'];
    public $depends = ['xj\foundation\FoundationAsset'];

}

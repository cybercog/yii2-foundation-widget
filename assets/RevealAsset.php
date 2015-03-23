<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation;

use yii\web\AssetBundle;

class RevealAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation';
    public $js = ['js/foundation/foundation.reveal.js'];
    public $depends = ['xj\foundation\FoundationAsset'];

}

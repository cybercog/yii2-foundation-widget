<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation\assets;

use yii\web\AssetBundle;

class SectionAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation-for-yii2';
    public $js = ['js/foundation/foundation.section.js'];
    public $depends = ['xj\foundation\FoundationAsset'];

}

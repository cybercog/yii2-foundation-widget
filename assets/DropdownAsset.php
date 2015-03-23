<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation\assets;

use yii\web\AssetBundle;

class DropdownAsset extends AssetBundle {

    public $sourcePath = '@bower/bower-foundation';
    public $js = ['js/foundation/foundation.dropdown.js'];
    public $depends = ['xj\foundation\FoundationAsset'];

}

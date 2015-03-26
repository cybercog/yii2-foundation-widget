<?php

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\foundation;

class Breadcrumbs extends \yii\widgets\Breadcrumbs {

    public $options = ['class' => 'breadcrumbs'];
    public $activeItemTemplate = "<li class=\"current\">{link}</li>\n";

}

<?php

namespace xj\foundation;

use yii\helpers\Html;
use xj\foundation\assets\OrbitAsset;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 * @example
 * \xj\foundation\Orbit::widget([
 *  'activeIndex' => 0,
 *  'items' => [
 *      ['src' => '', 'alt' => '', 'options' => [], 'caption' => '111'],
 *      ['src' => '', 'alt' => '', 'options' => [], 'caption' => '222'],
 *      ['src' => '', 'alt' => '', 'options' => [], 'caption' => '333'],
 *  ]
 *  ]);
 */
class Orbit extends \yii\base\Widget {

    /**
     *
     * @var int
     */
    public $activeIndex = null;

    /**
     *
     * @var []
     */
    public $items = [];
    public $tagName = 'ul';
    public $tagOptions = ['data' => ['orbit' => '']];
    public $itemName = 'li';
    public $itemOptions = [];
    public $itemActiveClass = 'active';
    public $captionTagName = 'div';
    public $captionClass = 'orbit-caption';

    public function run() {
        if (empty($this->items)) {
            return;
        }
        OrbitAsset::register($this->view);
        $itemsHtml = $this->renderItems($this->items);
        echo Html::tag($this->tagName, $itemsHtml, $this->tagOptions);
    }

    /**
     * 
     * @param [] $items
     * @return string
     */
    protected function renderItems($items) {
        $outHtml = '';
        foreach ($items as $index => $item) {
            $itemInnerHtml = '';
            $itemOptions = $this->itemOptions;
            $imgSrc = isset($item['src']) ? $item['src'] : null;
            $imgAlt = isset($item['alt']) ? $item['alt'] : null;
            $imgOptions = isset($item['options']) ? $item['options'] : [];
            $imgCaption = isset($item['caption']) ? $item['caption'] : null;

            if (!empty($imgAlt)) {
                Html::addCssClass($imgOptions, $imgAlt);
            }
            $itemInnerHtml .= Html::img($imgSrc, $imgOptions);

            if ($imgCaption !== null) {
                $itemInnerHtml.= Html::tag($this->captionTagName, $imgCaption, ['class' => $this->captionClass]);
            }

            if ($itemOptions === $index) {
                Html::addCssClass($itemOptions, $this->itemActiveClass);
            }

            $outHtml .= Html::tag($this->itemName, $itemInnerHtml, $itemOptions);
        }
        return $outHtml;
    }

}

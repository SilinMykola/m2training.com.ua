<?php
namespace Training\Test\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description
{
    public function _beforeToHtml() {

        $this->setTemplate('Training_Test::description.phtml');
        //$originalBlock->getProduct()->setDescription('Test description');
        return parent::_beforeToHtml();
    }
}
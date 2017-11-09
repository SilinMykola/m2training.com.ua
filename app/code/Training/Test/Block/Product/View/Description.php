<?php
namespace Training\Test\Block\Product\View;

class Description
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) {

        $originalBlock->setTemplate('Training_Test::description.phtml');
        //$originalBlock->getProduct()->setDescription('Test description');
    }
}
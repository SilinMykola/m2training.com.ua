<?php
namespace Training\Test\Controller\Block;

class WebStoreList extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Training\Test\Block\WebStoreList');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
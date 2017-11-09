<?php
/**
 * Product controller.
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Training\Test\Controller\Action;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Training\Test\Block\Template');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
//        $this->_redirect('catalog/category/view/id/2');
//        $this->getResponse()->appendBody("HELLO WORLD");
    }
}
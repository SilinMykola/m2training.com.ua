<?php
/**
 * Product controller.
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Training\Test\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    public function execute() {
        die("zasada");
        $this->getResponse()->appendBody("HELLO WORLD");
    }

    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    protected function _isAllowed() {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }
}
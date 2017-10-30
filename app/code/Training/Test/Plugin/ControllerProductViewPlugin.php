<?php
namespace Training\Test\Plugin;

class ControllerProductViewPlugin
{

//    public function beforeExecute(\Magento\Catalog\Controller\Product\View $subject)
//    {
//        echo "BEFORE<BR>"; exit;
//    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $subject,
                                 $result) {
        echo "AFTER"; exit;
    }

}
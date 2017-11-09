<?php
namespace Training\Test\Plugin;

class CatalogProductViewPlugin
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) {

        $originalBlock->getProduct()->setDescription('Test description');
    }
}
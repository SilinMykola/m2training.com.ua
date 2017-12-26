<?php
namespace Training\Test\Block;

class WebStoreList extends \Magento\Framework\View\Element\Template
{
    protected $storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getCategory()
    {
        $websites = $this->_storeManager->getWebsites();
        return 'ZASADA';
    }

    protected function _toHtml()
    {
        return $this->getCategory();
    }
}
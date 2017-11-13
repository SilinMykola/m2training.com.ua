<?php
namespace Training\Test\Model;

class List
{
    protected $collectionFactory;

    protected $storeFactory;

    public function __construct(
    \Magento\Store\Model\ResourceModel\Store\CollectionFactory $collectionFactory,
    \Magento\Store\Model\StoreFactory $storeFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->storeFactory = $storeFactory;
    }

    public function getCategory()
    {
        $collection = $this->collectionFactory->create();
        $storeId = $this->storeFactory->create()->getRootCategoryId();
    }
}
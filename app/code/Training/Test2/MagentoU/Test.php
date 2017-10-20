<?php
namespace Training\Test2\MagentoU;
class Test
{
public function __construct(
	\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
	\Magento\Catalog\Model\ProductFactory $productFactory,
	\Magento\Checkout\Model\Session $session,
	\Training\Test2\Api\ProductRepositoryInterface $unit1ProductRepository,
	$justAParameter = false,
	array $data
	) {
	}
}
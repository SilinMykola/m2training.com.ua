<?php
namespace Training\Test\Plugin;

class ProductPlugin
{
	public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
	{
		return $result+5; //return ProductPrice + 5
	}
}
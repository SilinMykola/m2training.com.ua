<?php
namespace Training\Test\Plugin;

class FooterPlugin
{
	public function afterGetCopyright (\Magento\Theme\Block\Html\Footer $subject, $result)
	{
		return "Customized copyright!";
	}
}
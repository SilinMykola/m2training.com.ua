<?php

namespace Training\Test\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbsPlugin
{
	public function beforeAddCrumb (\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
	{
		$crumbName = $crumbName.'(!)';
		return [$crumbName, $crumbInfo];
	}
}
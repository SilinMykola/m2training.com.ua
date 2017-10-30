<?php

namespace Training\Test\App;
class FrontController extends \Magento\Framework\App\FrontController {
	/**
	 * @var \Magento\Framework\App\RouterList
	 */
	protected $routerList;
	/**
	 * @var \Magento\Framework\App\Response\Http
	 */
	protected $response;
	/**
	 * @var \Psr\Log\LoggerInterface
	 */
	protected $logger;

	/**
	 * @param \Magento\Framework\App\RouterList $routerList
	 * @param \Magento\Framework\App\Response\Http $response
	 * @param \Psr\Log\LoggerInterface $logger
	 */
	public function __construct(
		\Magento\Framework\App\RouterList $routerList,
		\Magento\Framework\App\Response\Http $response,
		\Psr\Log\LoggerInterface $logger,
        \Magento\Framework\App\RouterListInterface $_routerList,
        \Magento\Framework\App\ResponseInterface $_response
	) {
		$this->routerList = $routerList;
		$this->response   = $response;
		$this->logger     = $logger;
		parent::__construct($_routerList, $_response);
	}

	/**
	 * @param \Magento\Framework\App\RequestInterface $request
	 *
	 * @return
	\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
	 */
	public function dispatch( \Magento\Framework\App\RequestInterface $request )
    {

//	    var_dump($this->routerList);
//		die();
	    foreach ( $this->routerList as $router ) {
			$this->logger->critical( get_class( $router ) );
		}

	    return parent::dispatch( $request );
	}
}
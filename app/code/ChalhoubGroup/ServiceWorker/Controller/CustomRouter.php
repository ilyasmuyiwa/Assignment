<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/27/19
 * Time: 1:12 PM
 */

namespace ChalhoubGroup\ServiceWorker\Controller;


use ChalhoubGroup\ServiceWorker\Helper\Data;

class CustomRouter implements \Magento\Framework\App\RouterInterface
{
    /** @var \Magento\Framework\App\ActionFactory $actionFactory */
    protected $actionFactory;
    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory
    ) {
        $this->actionFactory = $actionFactory;
    }
    /**
     * @inheritdoc
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        if (trim($request->getPathInfo(), "/") == Data::SERVICE_WORKER) {
            $request
                ->setModuleName("serviceworker")
                ->setControllerName("index")
                ->setActionName("js");
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward');
        }
        return null;
    }
}
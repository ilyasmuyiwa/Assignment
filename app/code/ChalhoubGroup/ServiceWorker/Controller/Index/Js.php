<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/27/19
 * Time: 1:10 PM
 */

namespace ChalhoubGroup\ServiceWorker\Controller\Index;


class Js extends \Magento\Framework\App\Action\Action
{
    /** @var \Magento\Framework\View\Result\LayoutFactory $layoutFactory */
    protected $layoutFactory;
    /**
     * Index constructor.
     *
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\LayoutFactory $layoutFactory
    ) {
        $this->layoutFactory = $layoutFactory;
        parent::__construct($context);
    }
    /**
     * @inheritdoc
     */
    public function execute()
    {
        return $this->layoutFactory->create()
            ->addDefaultHandle()
            ->setHeader("Content-Type", "text/javascript", true);
    }




}
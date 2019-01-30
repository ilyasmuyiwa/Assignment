<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 1/27/19
 * Time: 12:39 PM
 */

namespace ChalhoubGroup\ServiceWorker\Block;

use ChalhoubGroup\ServiceWorker\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Element\Template;


class Register extends Template
{

    protected $_scopeConfig;

    protected $registry;

    protected $objectManager;


    public function __construct(
        \Magento\Framework\Registry $registry,
        ScopeConfigInterface $scopeConfig,
        ObjectManagerInterface $objectManager,
        Template\Context $context, array $data = [])
    {
        $this->_scopeConfig = $scopeConfig;
        $this->registry = $registry;
        $this->objectManager = $objectManager;

        parent::__construct($context, $data);
    }


    public function isEnable() {
        $status = $this->_scopeConfig->getValue('service/general/enable');
        if ($status== 1) {
            return true;
        }

        return false;
    }

    public function getServiceWorkerJs()
    {
    return $this->_urlBuilder->getDirectUrl(Data::SERVICE_WORKER);
    }

    public function getCurrentProduct()
    {
        $product = $this->registry->registry('current_product');
        return $product;
    }

    public function getMedia() {
        /** @var \Magento\Catalog\Model\Product $product */
        $product = $this->getCurrentProduct();
        $imageArray = [];
        $i = 1;
        if($product) {
            $images = $product->getMediaGalleryImages();
            foreach ($images as $childImage) {
                $imageArray[] = $childImage->getUrl();
                if ($i++ == 10) break;
            }
        }
        return $imageArray;
    }

}
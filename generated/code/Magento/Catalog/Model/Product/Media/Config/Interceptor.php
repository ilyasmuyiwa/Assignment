<?php
namespace Magento\Catalog\Model\Product\Media\Config;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Media\Config
 */
class Interceptor extends \Magento\Catalog\Model\Product\Media\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseMediaPathAddition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseMediaPathAddition');
        if (!$pluginInfo) {
            return parent::getBaseMediaPathAddition();
        } else {
            return $this->___callPlugins('getBaseMediaPathAddition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseMediaUrlAddition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseMediaUrlAddition');
        if (!$pluginInfo) {
            return parent::getBaseMediaUrlAddition();
        } else {
            return $this->___callPlugins('getBaseMediaUrlAddition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseMediaPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseMediaPath');
        if (!$pluginInfo) {
            return parent::getBaseMediaPath();
        } else {
            return $this->___callPlugins('getBaseMediaPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseMediaUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseMediaUrl');
        if (!$pluginInfo) {
            return parent::getBaseMediaUrl();
        } else {
            return $this->___callPlugins('getBaseMediaUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTmpMediaPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTmpMediaPath');
        if (!$pluginInfo) {
            return parent::getBaseTmpMediaPath();
        } else {
            return $this->___callPlugins('getBaseTmpMediaPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTmpMediaUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTmpMediaUrl');
        if (!$pluginInfo) {
            return parent::getBaseTmpMediaUrl();
        } else {
            return $this->___callPlugins('getBaseTmpMediaUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaUrl($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaUrl');
        if (!$pluginInfo) {
            return parent::getMediaUrl($file);
        } else {
            return $this->___callPlugins('getMediaUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaPath($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaPath');
        if (!$pluginInfo) {
            return parent::getMediaPath($file);
        } else {
            return $this->___callPlugins('getMediaPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTmpMediaUrl($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTmpMediaUrl');
        if (!$pluginInfo) {
            return parent::getTmpMediaUrl($file);
        } else {
            return $this->___callPlugins('getTmpMediaUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTmpMediaShortUrl($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTmpMediaShortUrl');
        if (!$pluginInfo) {
            return parent::getTmpMediaShortUrl($file);
        } else {
            return $this->___callPlugins('getTmpMediaShortUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaShortUrl($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaShortUrl');
        if (!$pluginInfo) {
            return parent::getMediaShortUrl($file);
        } else {
            return $this->___callPlugins('getMediaShortUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTmpMediaPath($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTmpMediaPath');
        if (!$pluginInfo) {
            return parent::getTmpMediaPath($file);
        } else {
            return $this->___callPlugins('getTmpMediaPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributeCodes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributeCodes');
        if (!$pluginInfo) {
            return parent::getMediaAttributeCodes();
        } else {
            return $this->___callPlugins('getMediaAttributeCodes', func_get_args(), $pluginInfo);
        }
    }
}

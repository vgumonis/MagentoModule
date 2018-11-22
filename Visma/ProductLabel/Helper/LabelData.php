<?php

namespace Visma\ProductLabel\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class LabelData extends AbstractHelper
{

    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getConfig($entity)
    {
        return $this->_scopeConfig->getValue("productlabel/general/$entity", "websites");
    }

}
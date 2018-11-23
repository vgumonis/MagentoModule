<?php

namespace Visma\ProductLabel\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class LabelData extends AbstractHelper
{
    protected $scopeConfig;

    const XML_PATH = 'productlabel/general/';
    const SCOPE ="websites";

    public function __construct(
       Context $context, ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getConfig(string $entity): ?string
    {
        return $this->scopeConfig->getValue(self::XML_PATH . $entity, self::SCOPE);
    }
}
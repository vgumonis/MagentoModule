<?php
namespace Visma\ProductLabel\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;
use Visma\ProductLabel\Helper\LabelData;

class Label extends \Magento\Framework\App\Action\Action implements CsrfAwareActionInterface
{
    private $labelData;

    public function __construct(Context $context, LabelData $labelData)
    {
        $this->labelData = $labelData;
        parent::__construct($context);
    }
    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        return null;
    }

    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }

    public function execute()
    {
        echo "This is the Label module.";

        var_dump($this->labelData->getConfig('label_colour'));
        var_dump($this->labelData->getConfig('label_text'));

        exit;
    }
}
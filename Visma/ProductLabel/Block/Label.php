<?php
 namespace Visma\ProductLabel\Block;

 use Visma\ProductLabel\Helper\LabelData;
 use Magento\Framework\View\Element\Template;
 use Magento\Framework\View\Element\Template\Context;
 use Magento\Framework\Registry;

 class Label extends Template
 {
     public  $data;
     protected $registry;

     public function __construct( Context $context, Registry $registry, LabelData $labelData)
     {   $this->data = $labelData;
         $this->registry = $registry;
         return parent::__construct($context);
     }


     public function getColour()
     {
        ///return $this->data->getGeneralConfig('label-colour');
        switch ($this->data->getConfig('label_colour')){
            case "0":
                return "red";
                break;
            case "1":
                break;
            case "2":
                return "blue";
                break;
            default:
                return "red";
        }
     }

     public function getLabelText()
     {
         return $this->data->getConfig('label_text');
     }


     public function getCurrentProduct()
     {
         return $this->registry->registry('current_product');
     }
 }
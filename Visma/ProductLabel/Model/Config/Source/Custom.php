<?php

namespace Visma\ProductLabel\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Custom implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Red')],
            ['value' => 1, 'label' => __('Green')],
            ['value' => 2, 'label' => __('Blue')],
        ];
    }
}
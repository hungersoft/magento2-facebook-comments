<?php
/**
 * @category  HS
 *
 * @copyright Copyright (c) 2015 Hungersoft (http://www.hungersoft.com)
 * @license   http://www.hungersoft.com/license.txt Hungersoft General License
 */

namespace HS\FacebookComments\Model\Config\Source;

class Colorscheme implements \Magento\Framework\Option\ArrayInterface
{
    const LIGHT = 'light';
    const DARK = 'dark';

    /**
     * Option array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->toArray() as $value => $label) {
            $options[] = [
                'value' => $value,
                'label' => $label,
            ];
        }

        return $options;
    }

    /**
     * Key-value pair of description options.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::LIGHT => __('Light'),
            self::DARK => __('Dark'),
        ];
    }
}

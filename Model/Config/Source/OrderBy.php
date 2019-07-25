<?php
/**
 * @category  HS
 *
 * @copyright Copyright (c) 2015 Hungersoft (http://www.hungersoft.com)
 * @license   http://www.hungersoft.com/license.txt Hungersoft General License
 */

namespace HS\FacebookComments\Model\Config\Source;

class OrderBy implements \Magento\Framework\Option\ArrayInterface
{
    const SOCIAL = 'social';
    const REVERSE_TIME = 'reverse_time';
    const TIME = 'time';

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
            self::SOCIAL => __('Social'),
            self::REVERSE_TIME => __('Reverse time'),
            self::TIME => __('Time'),
        ];
    }
}

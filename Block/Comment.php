<?php
/**
 * @category  HS
 *
 * @copyright Copyright (c) 2015 Hungersoft (http://www.hungersoft.com)
 * @license   http://www.hungersoft.com/license.txt Hungersoft General License
 */

namespace HS\FacebookComments\Block;

class Comment extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \HS\FacebookComments\Helper\Data
     */
    private $helper;

    /**
     * Constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \HS\FacebookComments\Helper\Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return Template|void
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->setTitle($this->helper->getTitle());
    }

    /**
     * Get Facebook SDK URL.
     *
     * @return string
     */
    public function getSDKUrl()
    {
        return sprintf('https://connect.facebook.net/%s/sdk.js#xfbml=1&version=v3.3', $this->helper->getLocale());
    }

    /**
     * Get current page URL.
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        return $this->escapeUrl($this->_urlBuilder->getCurrentUrl());
    }
}

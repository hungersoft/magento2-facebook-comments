<?php
/**
 * @category  HS
 *
 * @copyright Copyright (c) 2015 Hungersoft (http://www.hungersoft.com)
 * @license   http://www.hungersoft.com/license.txt Hungersoft General License
 */

namespace HS\FacebookComments\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const CONFIG_ENABLED = 'hs_facebook_comment/general/enabled';
    const CONFIG_TITLE = 'hs_facebook_comment/general/title';
    const CONFIG_NUM_POSTS = 'hs_facebook_comment/general/num_posts';
    const CONFIG_ORDER_BY = 'hs_facebook_comment/general/order_by';
    const CONFIG_COLORSCHEME = 'hs_facebook_comment/general/colorscheme';
    const CONFIG_WIDTH = 'hs_facebook_comment/general/width';

    /**
     * Currently selected store ID if applicable.
     *
     * @var int
     */
    protected $_storeId = null;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Get config value by path.
     *
     * @param string $path
     *
     * @return mixed
     */
    public function getConfigValue($path)
    {
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get config flag by path.
     *
     * @param string $path
     *
     * @return bool
     */
    public function getConfigFlag($path)
    {
        return $this->scopeConfig->isSetFlag($path, ScopeInterface::SCOPE_STORE, $this->_storeId);
    }

    /**
     * Return true if active and false otherwise.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfigFlag(self::CONFIG_ENABLED);
    }

    /**
     * Current locale.
     *
     * @return mixed
     */
    public function getLocale()
    {
        return $this->getConfigValue(\Magento\Directory\Helper\Data::XML_PATH_DEFAULT_LOCALE);
    }

    /**
     * Block title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getConfigValue(self::CONFIG_TITLE);
    }

    /**
     * Get number of posts.
     *
     * @return string
     */
    public function getNumPosts()
    {
        return $this->getConfigValue(self::CONFIG_NUM_POSTS);
    }

    /**
     * Get order by.
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->getConfigValue(self::CONFIG_ORDER_BY);
    }

    /**
     * Get color scheme.
     *
     * @return string
     */
    public function getColorscheme()
    {
        return $this->getConfigValue(self::CONFIG_COLORSCHEME);
    }

    /**
     * Get width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->getConfigValue(self::CONFIG_WIDTH);
    }
}

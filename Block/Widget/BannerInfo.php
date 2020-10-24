<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento360\BannerSlider\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class BannerInfo extends Template implements BlockInterface
{

    protected $_template = "widget/bannerinfo.phtml";
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    public $filterProvider;
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    public $storeManager;

    public function __construct(Template\Context $context,
                            \Magento\Cms\Model\Template\FilterProvider $filterProvider,
                            \Magento\Store\Model\StoreManagerInterface $storeManager,
                            array $data = [])
        {
            parent::__construct($context, $data);
            $this->filterProvider = $filterProvider;
            $this->storeManager = $storeManager;
        }

        public function getBlockFilter(){
            $this->filterProvider->getBlockFilter();
        }
        public function getStoreId(){
            $this->storeManager->getStore()->getId();
        }
}


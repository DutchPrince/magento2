<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Sales\Test\Block\Adminhtml\Order\View\Tab;

use Magento\Backend\Test\Block\Widget\Tab;
use Magento\Sales\Test\Block\Adminhtml\Order\View\Tab\CreditMemos\Grid;

/**
 * CreditMemos tab.
 */
class CreditMemos extends Tab
{
    /**
     * Grid block css selector.
     *
     * @var string
     */
    protected $grid = '[data-bind*=sales_order_view_creditmemo_grid]';

    /**
     * Get grid block.
     *
     * @return Grid
     */
    public function getGridBlock()
    {
        return $this->blockFactory->create(
            'Magento\Sales\Test\Block\Adminhtml\Order\View\Tab\CreditMemos\Grid',
            ['element' => $this->_rootElement->find($this->grid)]
        );
    }
}

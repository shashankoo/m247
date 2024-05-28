<?php

namespace Pixelmechanics\Hello\Controller\Adminhtml\Employee;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Mapped eBay Order List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        echo __('Hello Pixelmechanics Team.');
    }

    /**
     * Check Order Import Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Pixelmechanics_Hello::employee');
    }
}

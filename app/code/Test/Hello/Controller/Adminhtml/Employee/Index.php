<?php

namespace Test\Hello\Controller\Adminhtml\Employee;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Mapped eBay Order List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        echo __('Hello Test Team.');
    }

    /**
     * Check Order Import Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Test_Hello::employee');
    }
}

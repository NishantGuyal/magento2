<?php

namespace Nishant\Cmodule\Model\ResourceModel\Popup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Nishant\Cmodule\Model\Popup as PopupModel;
use Nishant\Cmodule\Model\ResourceModel\Popup as PopupResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            PopupModel::class,
            PopupResourceModel::class
        );
    }
}
